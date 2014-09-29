<?php
App::uses('AppController', 'Controller');
/**
 * Agents Controller
 *
 * @property Agent $Agent
 * @property PaginatorComponent $Paginator
 */
class AgentsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	
	public function isAuthorized($user) {
		// Any registered user can access public functions
	
	
		if ((isset($user['permission_level']) && $user['permission_level'] === '2')||(isset($user['permission_level']) && $user['permission_level'] === '1')||(isset($user['permission_level']) && $user['permission_level'] === '3')) {
			return true;
		}
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Agent->recursive = 0;
		$this->set('agents', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Agent->exists($id)) {
			throw new NotFoundException(__('Invalid agent'));
		}
		
		$options = array('conditions' => array('Agent.' . $this->Agent->primaryKey => $id));
		$this->set('agent', $this->Agent->find('first', $options));
		//$people = $this->Agent->Person->find('list', array('fields'=>array('Person.id_person','Person.completename')));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Agent->create();
			if ($this->Agent->save($this->request->data)) {
				$this->Session->setFlash(__('The agent has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The agent could not be saved. Please, try again.'));
			}
		}
		$people = $this->Agent->Person->find('list', array('fields'=>array('Person.id_person','Person.completename'),'order' => array('Person.completename' => 'ASC')));
		$zones = $this->Agent->Zone->find('list');
		$this->set(compact('people', 'zones'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Agent->exists($id)) {
			throw new NotFoundException(__('Invalid agent'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Agent->save($this->request->data)) {
				$this->Session->setFlash(__('The agent has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The agent could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Agent.' . $this->Agent->primaryKey => $id));
			$this->request->data = $this->Agent->find('first', $options);
		}
		$people = $this->Agent->Person->find('list', array('fields'=>array('Person.id_person','Person.completename'),'order' => array('Person.completename' => 'ASC')));
		$zones = $this->Agent->Zone->find('list');
		$this->set(compact('people', 'zones'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Agent->id = $id;
		if (!$this->Agent->exists()) {
			throw new NotFoundException(__('Invalid agent'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Agent->delete()) {
			$this->Session->setFlash(__('The agent has been deleted.'));
		} else {
			$this->Session->setFlash(__('The agent could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
