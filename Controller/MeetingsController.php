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
	var $uses = array('Person','Meeting','Site','User','Agent','Neighborhood','SiteType');
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
	);
	
	

/**
 * index method
 *
 * @return void
 */
	public function isAuthorized($user) {
		// Any registered user can access public functions
	
	
		if ((isset($user['permission_level']) && $user['permission_level'] === '3')||(isset($user['permission_level']) && $user['permission_level'] === '2')||(isset($user['permission_level']) && $user['permission_level'] === '1')) {
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
	
	}

	public function download()
	{
		$this->Meeting->recursive = 0;
		$this->set('meetings', $this->Meeting->find('all'));
		$this->set('sites',$this->Site->find('all'));
		$this->set('agents',$this->Agent->find('all'));
		$this->set('users',$this->User->find('all'));
		$this->set('people',$this->Person->find('all'));
		$this->set('neighborhoods',$this->Neighborhood->find('all'));
		$this->set('site_types',$this->SiteType->find('all'));
	
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
			/*$valor=$this->request;*/
			$this->Meeting->create();
			//if ($this->Meeting->save($this->request->data)) {				
				$this->Meeting->set(array(
						'user_id' => $usuario
				));
				//$this->Meeting->save();
			if ($this->Meeting->save($this->request->data)){
				
				$this->Session->setFlash(/*print_r($valor).*/__('La reunión se ha guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La reunión no se pudo guardar . Por favor , inténtelo de nuevo.'));
			}
		}
		/*$sites = $this->Meeting->Site->find('list');
		$this->set(compact('sites'));*/
		$sites = $this->Meeting->Site->find('list',array('order' => array('Site.site_name' => 'ASC')));
		$people = $this->Meeting->Person->find('list', array('fields'=>array('Person.id_person','Person.completename'),'order' => array('Person.completename' => 'ASC')));
		$this->set(compact('sites', 'people'));
		
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
			throw new NotFoundException(__('Invalid meeting'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Meeting->save($this->request->data)) {
				$this->Session->setFlash(__('La reunión se ha guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La reunión no se pudo guardar . Por favor , inténtelo de nuevo.'));
			}
		} else {
			$options = array('conditions' => array('Meeting.' . $this->Meeting->primaryKey => $id));
			$this->request->data = $this->Meeting->find('first', $options);
		}
		/*$sites = $this->Meeting->Site->find('list');
		$this->set(compact('sites'));*/
		
		$sites = $this->Meeting->Site->find('list');
		$people = $this->Meeting->Person->find('list', array('fields'=>array('Person.id_person','Person.completename'),'order' => array('Person.completename' => 'ASC')));
		$this->set(compact('sites', 'people'));
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
			$this->Session->setFlash(__('La reunión ha sido eliminado.'));
		} else {
			$this->Session->setFlash(__('La reunión no se pudo eliminar . Por favor , inténtelo de nuevo.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
