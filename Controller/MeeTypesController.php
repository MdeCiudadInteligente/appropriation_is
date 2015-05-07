<?php
App::uses('AppController', 'Controller');
/**
 * MeeTypes Controller
 *
 * @property MeeType $MeeType
 * @property PaginatorComponent $Paginator
 */
class MeeTypesController extends AppController {

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
		$this->MeeType->recursive = 0;
		$this->set('meeTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MeeType->exists($id)) {
			throw new NotFoundException(__('Invalid mee type'));
		}
		$options = array('conditions' => array('MeeType.' . $this->MeeType->primaryKey => $id));
		$this->set('meeType', $this->MeeType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MeeType->create();
			if ($this->MeeType->save($this->request->data)) {
				$this->Session->setFlash(__('The mee type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mee type could not be saved. Please, try again.'));
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
		if (!$this->MeeType->exists($id)) {
			throw new NotFoundException(__('Invalid mee type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MeeType->save($this->request->data)) {
				$this->Session->setFlash(__('The mee type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mee type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MeeType.' . $this->MeeType->primaryKey => $id));
			$this->request->data = $this->MeeType->find('first', $options);
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
		$this->MeeType->id = $id;
		if (!$this->MeeType->exists()) {
			throw new NotFoundException(__('Invalid mee type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MeeType->delete()) {
			$this->Session->setFlash(__('The mee type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The mee type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
