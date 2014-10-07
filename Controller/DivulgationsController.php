<?php
App::uses('AppController', 'Controller');
/**
 * Divulgations Controller
 *
 * @property Divulgation $Divulgation
 * @property PaginatorComponent $Paginator
 */
class DivulgationsController extends AppController {

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
	
	
		if ((isset($user['permission_level']) && $user['permission_level'] === '2')||(isset($user['permission_level']) && $user['permission_level'] === '1')||(isset($user['permission_level']) && $user['permission_level'] === '3')||(isset($user['permission_level']) && $user['permission_level'] === '4')) {
			return true;
		}
	}
	
		// Default deny
		//return false;
	public function download()
	{
	
		$this->set('divulgations', $this->Divulgation->find('all'));
		$this->layout = null;
		//$this->autoLayout = false;
		//Configure::write('debug', '0');
	}
	
	public function index() {
		$id_usuario = $this->Session->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
		
		//debug($id_usuario);
		//variable designada para Agents...
		$accompaniment=$this->Divulgation->find('all');
		$this->set('divulgations', $accompaniment);
		//$this->Accompaniment->recursive = 0;
	   	$this->Paginator->settings = $this->paginate;
		$this->set('divulgations', $this->Paginator->paginate('Divulgation'));
		if ($this->request->is('post')) {
			return $this->redirect(array('action' => 'download'));
		}
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Divulgation->exists($id)) {
			throw new NotFoundException(__('Invalid divulgation'));
		}
		$options = array('conditions' => array('Divulgation.' . $this->Divulgation->primaryKey => $id));
		$this->set('divulgation', $this->Divulgation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Divulgation->create();
			if ($this->Divulgation->save($this->request->data)) {
				$this->Session->setFlash(__('The divulgation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The divulgation could not be saved. Please, try again.'));
			}
		}
		$sites = $this->Divulgation->Site->find('list', array('order'=>array('Site.site_name ASC')));
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
		if (!$this->Divulgation->exists($id)) {
			throw new NotFoundException(__('Invalid divulgation'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Divulgation->save($this->request->data)) {
				$this->Session->setFlash(__('The divulgation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The divulgation could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Divulgation.' . $this->Divulgation->primaryKey => $id));
			$this->request->data = $this->Divulgation->find('first', $options);
		}
		$sites = $this->Divulgation->Site->find('list');
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
		$this->Divulgation->id = $id;
		if (!$this->Divulgation->exists()) {
			throw new NotFoundException(__('Invalid divulgation'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Divulgation->delete()) {
			$this->Session->setFlash(__('The divulgation has been deleted.'));
		} else {
			$this->Session->setFlash(__('The divulgation could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
