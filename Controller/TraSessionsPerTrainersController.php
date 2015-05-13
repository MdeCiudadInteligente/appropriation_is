<?php
App::uses('AppController', 'Controller');
/**
 * TraSessionsPerTrainers Controller
 *
 * @property TraSessionsPerTrainer $TraSessionsPerTrainer
 * @property PaginatorComponent $Paginator
 */
class TraSessionsPerTrainersController extends AppController {

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
		$this->TraSessionsPerTrainer->recursive = 0;
		$this->set('traSessionsPerTrainers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TraSessionsPerTrainer->exists($id)) {
			throw new NotFoundException(__('Invalid tra sessions per trainer'));
		}
		$options = array('conditions' => array('TraSessionsPerTrainer.' . $this->TraSessionsPerTrainer->primaryKey => $id));
		$this->set('traSessionsPerTrainer', $this->TraSessionsPerTrainer->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TraSessionsPerTrainer->create();
			if ($this->TraSessionsPerTrainer->save($this->request->data)) {
				$this->Session->setFlash(__('The tra sessions per trainer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tra sessions per trainer could not be saved. Please, try again.'));
			}
		}
		$trainers = $this->TraSessionsPerTrainer->Trainer->find('list');
		$sessions = $this->TraSessionsPerTrainer->Session->find('list');
		$this->set(compact('trainers', 'sessions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->TraSessionsPerTrainer->exists($id)) {
			throw new NotFoundException(__('Invalid tra sessions per trainer'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TraSessionsPerTrainer->save($this->request->data)) {
				$this->Session->setFlash(__('The tra sessions per trainer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tra sessions per trainer could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TraSessionsPerTrainer.' . $this->TraSessionsPerTrainer->primaryKey => $id));
			$this->request->data = $this->TraSessionsPerTrainer->find('first', $options);
		}
		$trainers = $this->TraSessionsPerTrainer->Trainer->find('list');
		$sessions = $this->TraSessionsPerTrainer->Session->find('list');
		$this->set(compact('trainers', 'sessions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->TraSessionsPerTrainer->id = $id;
		if (!$this->TraSessionsPerTrainer->exists()) {
			throw new NotFoundException(__('Invalid tra sessions per trainer'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TraSessionsPerTrainer->delete()) {
			$this->Session->setFlash(__('The tra sessions per trainer has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tra sessions per trainer could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
