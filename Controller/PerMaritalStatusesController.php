<?php
App::uses('AppController', 'Controller');
/**
 * PerMaritalStatuses Controller
 *
 * @property PerMaritalStatus $PerMaritalStatus
 * @property PaginatorComponent $Paginator
 */
class PerMaritalStatusesController extends AppController {

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
		$this->PerMaritalStatus->recursive = 0;
		$this->set('perMaritalStatuses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PerMaritalStatus->exists($id)) {
			throw new NotFoundException(__('Invalid per marital status'));
		}
		$options = array('conditions' => array('PerMaritalStatus.' . $this->PerMaritalStatus->primaryKey => $id));
		$this->set('perMaritalStatus', $this->PerMaritalStatus->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PerMaritalStatus->create();
			if ($this->PerMaritalStatus->save($this->request->data)) {
				$this->Session->setFlash(__('The per marital status has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The per marital status could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PerMaritalStatus->exists($id)) {
			throw new NotFoundException(__('Invalid per marital status'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PerMaritalStatus->save($this->request->data)) {
				$this->Session->setFlash(__('The per marital status has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The per marital status could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PerMaritalStatus.' . $this->PerMaritalStatus->primaryKey => $id));
			$this->request->data = $this->PerMaritalStatus->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PerMaritalStatus->id = $id;
		if (!$this->PerMaritalStatus->exists()) {
			throw new NotFoundException(__('Invalid per marital status'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PerMaritalStatus->delete()) {
			$this->Session->setFlash(__('The per marital status has been deleted.'));
		} else {
			$this->Session->setFlash(__('The per marital status could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
