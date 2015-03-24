<?php
App::uses('AppController', 'Controller');
/**
 * PerPeopleTypes Controller
 *
 * @property PerPeopleType $PerPeopleType
 * @property PaginatorComponent $Paginator
 */
class PerPeopleTypesController extends AppController {

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
		$this->PerPeopleType->recursive = 0;
		$this->set('perPeopleTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PerPeopleType->exists($id)) {
			throw new NotFoundException(__('Invalid per people type'));
		}
		$options = array('conditions' => array('PerPeopleType.' . $this->PerPeopleType->primaryKey => $id));
		$this->set('perPeopleType', $this->PerPeopleType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PerPeopleType->create();
			if ($this->PerPeopleType->save($this->request->data)) {
				$this->Session->setFlash(__('The per people type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The per people type could not be saved. Please, try again.'));
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
		if (!$this->PerPeopleType->exists($id)) {
			throw new NotFoundException(__('Invalid per people type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PerPeopleType->save($this->request->data)) {
				$this->Session->setFlash(__('The per people type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The per people type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PerPeopleType.' . $this->PerPeopleType->primaryKey => $id));
			$this->request->data = $this->PerPeopleType->find('first', $options);
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
		$this->PerPeopleType->id = $id;
		if (!$this->PerPeopleType->exists()) {
			throw new NotFoundException(__('Invalid per people type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PerPeopleType->delete()) {
			$this->Session->setFlash(__('The per people type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The per people type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
