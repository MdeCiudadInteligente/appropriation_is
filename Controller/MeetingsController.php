<?php

App::uses('AppController', 'Controller');

/**
 * Meetings Controller
 *
 * @property Meeting $Meeting
 * @property PaginatorComponent $Paginator
 * 
 */

class MeetingsController extends AppController {
	var $uses = array('Person','Meeting','Site','User','Agent','Neighborhood','SiteType','Commune');
	var $helpers = array('Html','Form','Csv','Js');
	
	
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	
	public $paginate = array(
			//'fields' => array('Meeting.meeting_type'),
			'limit' => 10,
			'order'=> array(
            'Meeting.id_meeting' => 'desc'
       )
	);
	
	

/**
 * index method
 *
 * @return void
 */
	public function isAuthorized($user) {
		// Any registered user can access public functions
	
	
		if ((isset($user['permission_level']) && $user['permission_level'] == '1')||(isset($user['permission_level']) && $user['permission_level'] == '2')||(isset($user['permission_level']) && $user['permission_level'] == '3')||(isset($user['permission_level']) && $user['permission_level'] == '4')||(isset($user['permission_level']) && $user['permission_level'] == '5')) {
			return true;
		}
			
	
		// Default deny
		//return false;
			
	}
	
	public function index() 
	{
		
		$id_usuario = $this->Session->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
		
		//debug($id_usuario);
		
		$meeting=$this->Meeting->find('all');
		$this->set('meetings', $meeting);
		//$this->Meeting->recursive = 0;
		if ($this->request->is('post')) {
			return $this->redirect(array('action' => 'download'));
		}
		$this->Paginator->settings = $this->paginate;
		$this->set('meetings', $this->Paginator->paginate('Meeting'));
		$this->set('totalm',$this->Meeting->find('count'));
	
	}

	public function index_service() 
	{
	    $this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$id_usuario = $this->Session->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
		
		$meeting=$this->Meeting->find('all');
		$count=0;
		foreach ($meeting as $key => $meeting) {
			$data['rows'][$count]=array(
					'id'=>$meeting['Meeting']['id_meeting'],
					'sitio'=>$meeting['Site']['site_name'],
					'f_reunion'=>$meeting['Meeting']['meeting_date'],
					//'tipo'=>$meeting['Meeting']['meeting_type'],
					'tipo'=>$meeting['MeeType']['name'],
					'titulo'=>$meeting['Meeting']['meeting_title'],
					'descripcion'=>$meeting['Meeting']['meeting_description'],
					'compromisos'=>$meeting['Meeting']['meeting_commitments'],
					'creation_date'=>$meeting['Meeting']['creation_date'],
					'modification_date'=>$meeting['Meeting']['modification_date'],
					'user_id'=>$meeting['Meeting']['user_id'],
			);
			$count++;
		}
     	$this->set(compact('data'));
		$this->set('_serialize', 'data'); // Let the JsonView class know what variable to use
	}

	public function download()
	{
		$this->Meeting->recursive = 0;
		$this->set('meetings', $this->Meeting->find('all'));
		$this->set('sites',$this->Site->find('all'));
		//$this->set('agents',$this->Agent->find('all'));
		//$this->set('users',$this->User->find('all'));
		//$this->set('people',$this->Person->find('all'));
		$this->set('neighborhoods',$this->Neighborhood->find('all'));
		$this->set('site_types',$this->SiteType->find('all'));
		$this->set('communes',$this->Commune->find('all'));
		//$totalm = $this->Meeting->find('count');
		
	
		$this->layout = null;
		//$this->autoLayout = false;
		//Configure::write('debug', '0');
	}
	
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Meeting->exists($id)) {
			throw new NotFoundException(__('Invalid meeting'));
		}
		$options = array('conditions' => array('Meeting.' . $this->Meeting->primaryKey => $id));
		$this->set('meeting', $this->Meeting->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
public function add() {
		if ($this->request->is('post')) {
			$usuario = $this->Session->read('Auth.User.id_user');
			$this->set('usuario',$usuario);
			
			$this->Meeting->create();
			$data=$this->request->data;
			if($data!=''){
			$data['Meeting']['creation_date']=date('Y-m-d H:i:s');
			$data['Meeting']['user_id']=$usuario;
			}		
			else{

				$this->Session->setFlash(__('Los adjuntos no se han podido cargar correctamente'));
			}
			if ($this->Meeting->save($data)) {
					$this->Session->setFlash(__('The meeting has been saved.'));
					return $this->redirect(array('action' => 'index'));
			}
			else
			{
				$this->Session->setFlash(__('The meeting could not be saved. Please, try again.'));
			}
		}
		$sites = $this->Meeting->Site->find('list',array('order' => array('Site.site_name' => 'ASC')));
		$people = $this->Meeting->Person->find('list', array('fields'=>array('Person.id_person','Person.completename'),'order' => array('Person.completename' => 'ASC')));
		$meeTypes = $this->Meeting->MeeType->find('list',array('order' => array('MeeType.name ASC')));
		$this->set(compact('sites', 'people','meeTypes'));
		
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Meeting->exists($id)) {
			throw new NotFoundException(__('reunión no válida'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Meeting->save($this->request->data)) {
				$this->Session->setFlash(__('The meeting has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The meeting could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Meeting.' . $this->Meeting->primaryKey => $id));
			$this->request->data = $this->Meeting->find('first', $options);
		}
		/*$sites = $this->Meeting->Site->find('list');
		$this->set(compact('sites'));*/
		
		$sites = $this->Meeting->Site->find('list');
		$people = $this->Meeting->Person->find('list', array('fields'=>array('Person.id_person','Person.completename'),'order' => array('Person.completename' => 'ASC')));
		$meeTypes = $this->Meeting->MeeType->find('list',array('order' => array('MeeType.name ASC')));
		$this->set(compact('sites', 'people','meeTypes'));
		$options = array('conditions' => array('Meeting.' . $this->Meeting->primaryKey => $id));
		$this->set('meeting', $this->Meeting->find('first', $options));
	}
	
	/**
	 * delete files one by one
	 *
	 * @return void
	 */
	public function delete_attachment($idattach=null,$druta = null) {
		$this->set('druta',$druta);
	
		$deletefile="update meetings SET meeting_adjunct='' Where id_meeting ='$idattach'";
		$deletefilefinal=$this->Meeting->query($deletefile);
		$this->set('deletefilefinal',$deletefilefinal);
	
		unlink('../webroot/uploads/meeting/meeting_adjunct/'.$druta);
	
		return $this->redirect(array('action' => 'edit',$idattach));
			
	}
	
	public function delete_attachment1($idattach=null,$druta1 = null) {
		$this->set('druta1',$druta1);
	
		$deletefile="update meetings SET meeting_adjunct1='' Where id_meeting ='$idattach'";
		$deletefilefinal=$this->Meeting->query($deletefile);
		$this->set('deletefilefinal',$deletefilefinal);
		unlink('../webroot/uploads/meeting/meeting_adjunct1/'.$druta1);
	
		return $this->redirect(array('action' => 'edit',$idattach));
			
	}
	
	public function delete_attachment2($idattach=null,$druta2 = null) {
		$this->set('druta2',$druta2);
	
		$deletefile="update meetings SET meeting_adjunct2='' Where id_meeting ='$idattach'";
		$deletefilefinal=$this->Meeting->query($deletefile);
		$this->set('deletefilefinal',$deletefilefinal);
		unlink('../webroot/uploads/meeting/meeting_adjunct2/'.$druta2);
	
		return $this->redirect(array('action' => 'edit',$idattach));
			
	}
/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Meeting->id = $id;
		if (!$this->Meeting->exists()) {
			throw new NotFoundException(__('Invalid meeting'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Meeting->delete()) {
			$this->Session->setFlash(__('The meeting has been deleted.'));
		} else {
			$this->Session->setFlash(__('The meeting could not be removed. Please try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
