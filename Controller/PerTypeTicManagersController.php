<?php
App::uses('AppController', 'Controller');
/**
 * PerTypeTicManagers Controller
 *
 * @property PerTypeTicManager $PerTypeTicManager
 * @property PaginatorComponent $Paginator
 */
class PerTypeTicManagersController extends AppController {

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
		$this->PerTypeTicManager->recursive = 0;
		$this->set('perTypeTicManagers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PerTypeTicManager->exists($id)) {
			throw new NotFoundException(__('Invalid per type tic manager'));
		}
		$options = array('conditions' => array('PerTypeTicManager.' . $this->PerTypeTicManager->primaryKey => $id));
		$this->set('perTypeTicManager', $this->PerTypeTicManager->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PerTypeTicManager->create();
			if ($this->PerTypeTicManager->save($this->request->data)) {
				$this->Session->setFlash(__('The per type tic manager has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The per type tic manager could not be saved. Please, try again.'));
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
		if (!$this->PerTypeTicManager->exists($id)) {
			throw new NotFoundException(__('Invalid per type tic manager'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PerTypeTicManager->save($this->request->data)) {
				$this->Session->setFlash(__('The per type tic manager has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The per type tic manager could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PerTypeTicManager.' . $this->PerTypeTicManager->primaryKey => $id));
			$this->request->data = $this->PerTypeTicManager->find('first', $options);
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
		$this->PerTypeTicManager->id = $id;
		if (!$this->PerTypeTicManager->exists()) {
			throw new NotFoundException(__('Invalid per type tic manager'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PerTypeTicManager->delete()) {
			$this->Session->setFlash(__('The per type tic manager has been deleted.'));
		} else {
			$this->Session->setFlash(__('The per type tic manager could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
