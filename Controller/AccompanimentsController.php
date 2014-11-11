<?php
App::uses('AppController', 'Controller');
/**
 * Accompaniments Controller
 *
 * @property Accompaniment $Accompaniment
 * @property PaginatorComponent $Paginator
 */
class AccompanimentsController extends AppController {
	var $uses = array('Person','Site','Accompaniment','Neighborhood','SiteType','User','Agent','Commune');
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
	
	
		if ((isset($user['permission_level']) && $user['permission_level'] === '2')||(isset($user['permission_level']) && $user['permission_level'] === '1')||(isset($user['permission_level']) && $user['permission_level'] === '3')) {
			return true;
		}
	}
			
	
		// Default deny
		//return false;

	
	public function index() {
		
		$id_usuario = $this->Session->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
		//debug($id_usuario);
		
		/*$usuario_level= $this->Session->read('Auth.User.permission_level');
		 $this->set('usuario_level',$usuario_level);*/
		
		//variable designada para Agents...
		$accompaniment=$this->Accompaniment->find('all');
		$this->set('accompaniments', $accompaniment);		//$this->Meeting->recursive = 0;
		
		//$this->Accompaniment->recursive = 0;
		//$this->set('accompaniments', $this->Paginator->paginate('Accompaniment'));
		if ($this->request->is('post')) {
			return $this->redirect(array('action' => 'download'));
		}
		
		$this->Paginator->settings = $this->paginate;
		$this->set('accompaniments', $this->Paginator->paginate('Accompaniment'));	
		$this->set('totala',$this->Accompaniment->find('count'));

	}
	
	public function download()
	{
		$this->Accompaniment->recursive = 0;
		$this->set('accompaniments', $this->Accompaniment->find('all'));
		$this->set('sites',$this->Site->find('all'));
		$this->set('agents',$this->Agent->find('all'));
		$this->set('users',$this->User->find('all'));
		$this->set('neighborhoods',$this->Neighborhood->find('all'));
		$this->set('site_types',$this->SiteType->find('all'));
		$this->set('people',$this->Person->find('all'));
		$this->set('communes',$this->Commune->find('all'));
	
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
		if (!$this->Accompaniment->exists($id)) {
			throw new NotFoundException(__('Invalid accompaniment'));
		}
		$options = array('conditions' => array('Accompaniment.' . $this->Accompaniment->primaryKey => $id));
		$this->set('accompaniment', $this->Accompaniment->find('first', $options));
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
			
			$this->Accompaniment->create();
			
				
				$this->Accompaniment->set(array(
						'user_id' => $usuario
				));
				if ($this->Accompaniment->save($this->request->data)) {
				
				$this->Session->setFlash(__('The accompaniment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The accompaniment could not be saved. Please, try again.'));
			}
		}
		$sites = $this->Accompaniment->Site->find('list', array('order'=>array('Site.site_name ASC')));
		$this->set(compact('sites'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Accompaniment->exists($id)) {
			throw new NotFoundException(__('Invalid accompaniment'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Accompaniment->save($this->request->data)) {
				$this->Session->setFlash(__('The accompaniment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The accompaniment could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Accompaniment.' . $this->Accompaniment->primaryKey => $id));
			$this->request->data = $this->Accompaniment->find('first', $options);
		}
		$sites = $this->Accompaniment->Site->find('list');
		$this->set(compact('sites'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Accompaniment->id = $id;
		if (!$this->Accompaniment->exists()) {
			throw new NotFoundException(__('Invalid accompaniment'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Accompaniment->delete()) {
			$this->Session->setFlash(__('The accompaniment has been deleted.'));
		} else {
			$this->Session->setFlash(__('The accompaniment could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
