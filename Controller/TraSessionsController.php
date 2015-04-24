<?php
App::uses('AppController', 'Controller');
/**
 * TraSessions Controller
 *
 * @property TraSession $TraSession
 * @property PaginatorComponent $Paginator
 */
class TraSessionsController extends AppController {

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
	public function index() {
		$this->TraSession->recursive = 0;
		$this->set('traSessions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TraSession->exists($id)) {
			throw new NotFoundException(__('Invalid tra session'));
		}
		$options = array('conditions' => array('TraSession.' . $this->TraSession->primaryKey => $id));
		$this->set('traSession', $this->TraSession->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TraSession->create();
			if ($this->TraSession->save($this->request->data)) {
				$this->Session->setFlash(__('The tra session has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tra session could not be saved. Please, try again.'));
			}
		}
		$trainings = $this->TraSession->Training->find('list');
		$this->set(compact('trainings'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->TraSession->exists($id)) {
			throw new NotFoundException(__('Invalid tra session'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TraSession->save($this->request->data)) {
				$this->Session->setFlash(__('The tra session has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tra session could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TraSession.' . $this->TraSession->primaryKey => $id));
			$this->request->data = $this->TraSession->find('first', $options);
		}
		$trainings = $this->TraSession->Training->find('list');
		$this->set(compact('trainings'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->TraSession->id = $id;
		if (!$this->TraSession->exists()) {
			throw new NotFoundException(__('Invalid tra session'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TraSession->delete()) {
			$this->Session->setFlash(__('The tra session has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tra session could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
