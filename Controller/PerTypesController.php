<?php
App::uses('AppController', 'Controller');
/**
 * PerTypes Controller
 *
 * @property PerType $PerType
 * @property PaginatorComponent $Paginator
 */
class PerTypesController extends AppController {

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
		$this->PerType->recursive = 0;
		$this->set('perTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PerType->exists($id)) {
			throw new NotFoundException(__('Invalid per type'));
		}
		$options = array('conditions' => array('PerType.' . $this->PerType->primaryKey => $id));
		$this->set('perType', $this->PerType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PerType->create();
			if ($this->PerType->save($this->request->data)) {
				$this->Session->setFlash(__('The per type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The per type could not be saved. Please, try again.'));
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
		if (!$this->PerType->exists($id)) {
			throw new NotFoundException(__('Invalid per type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PerType->save($this->request->data)) {
				$this->Session->setFlash(__('The per type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The per type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PerType.' . $this->PerType->primaryKey => $id));
			$this->request->data = $this->PerType->find('first', $options);
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
		$this->PerType->id = $id;
		if (!$this->PerType->exists()) {
			throw new NotFoundException(__('Invalid per type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PerType->delete()) {
			$this->Session->setFlash(__('The per type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The per type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
