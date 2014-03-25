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

/**
 * index method
 *
 * @return void
 */
	public function isAuthorized($user) {
		// Any registered user can access public functions
	
	
		if ((isset($user['permission_level']) && $user['permission_level'] === '2')||(isset($user['permission_level']) && $user['permission_level'] === '1')) {
			return true;
		}
			
	
		// Default deny
		//return false;
			
	}
	
	public function index() {
		$this->Divulgation->recursive = 0;
		$this->set('divulgations', $this->Paginator->paginate());
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
		$sites = $this->Divulgation->Site->find('list');
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
