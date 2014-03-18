<?php
App::uses('AppController', 'Controller');
/**
 * Acompanamientos Controller
 *
 * @property Acompanamiento $Acompanamiento
 * @property PaginatorComponent $Paginator
 */
class AcompanamientosController extends AppController {

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
		$this->Acompanamiento->recursive = 0;
		$this->set('acompanamientos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Acompanamiento->exists($id)) {
			throw new NotFoundException(__('Invalid acompanamiento'));
		}
		$options = array('conditions' => array('Acompanamiento.' . $this->Acompanamiento->primaryKey => $id));
		$this->set('acompanamiento', $this->Acompanamiento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Acompanamiento->create();
			if ($this->Acompanamiento->save($this->request->data)) {
				$this->Session->setFlash(__('The acompanamiento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The acompanamiento could not be saved. Please, try again.'));
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
		if (!$this->Acompanamiento->exists($id)) {
			throw new NotFoundException(__('Invalid acompanamiento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Acompanamiento->save($this->request->data)) {
				$this->Session->setFlash(__('The acompanamiento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The acompanamiento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Acompanamiento.' . $this->Acompanamiento->primaryKey => $id));
			$this->request->data = $this->Acompanamiento->find('first', $options);
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
		$this->Acompanamiento->id = $id;
		if (!$this->Acompanamiento->exists()) {
			throw new NotFoundException(__('Invalid acompanamiento'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Acompanamiento->delete()) {
			$this->Session->setFlash(__('The acompanamiento has been deleted.'));
		} else {
			$this->Session->setFlash(__('The acompanamiento could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
