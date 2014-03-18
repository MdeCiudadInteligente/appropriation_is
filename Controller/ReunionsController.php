<?php
App::uses('AppController', 'Controller');
/**
 * Reunions Controller
 *
 * @property Reunion $Reunion
 * @property PaginatorComponent $Paginator
 */
class ReunionsController extends AppController {

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
		$this->Reunion->recursive = 0;
		$this->set('reunions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Reunion->exists($id)) {
			throw new NotFoundException(__('Invalid reunion'));
		}
		$options = array('conditions' => array('Reunion.' . $this->Reunion->primaryKey => $id));
		$this->set('reunion', $this->Reunion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Reunion->create();
			if ($this->Reunion->save($this->request->data)) {
				$this->Session->setFlash(__('The reunion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reunion could not be saved. Please, try again.'));
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
		if (!$this->Reunion->exists($id)) {
			throw new NotFoundException(__('Invalid reunion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Reunion->save($this->request->data)) {
				$this->Session->setFlash(__('The reunion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reunion could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Reunion.' . $this->Reunion->primaryKey => $id));
			$this->request->data = $this->Reunion->find('first', $options);
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
		$this->Reunion->id = $id;
		if (!$this->Reunion->exists()) {
			throw new NotFoundException(__('Invalid reunion'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Reunion->delete()) {
			$this->Session->setFlash(__('The reunion has been deleted.'));
		} else {
			$this->Session->setFlash(__('The reunion could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
