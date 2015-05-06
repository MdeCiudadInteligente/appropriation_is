<?php
App::uses('AppController', 'Controller');
/**
 * PerTrainerSchedules Controller
 *
 * @property PerTrainerSchedule $PerTrainerSchedule
 * @property PaginatorComponent $Paginator
 */
class PerTrainerSchedulesController extends AppController {

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
		$this->PerTrainerSchedule->recursive = 0;
		$this->set('perTrainerSchedules', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PerTrainerSchedule->exists($id)) {
			throw new NotFoundException(__('Invalid per trainer schedule'));
		}
		$options = array('conditions' => array('PerTrainerSchedule.' . $this->PerTrainerSchedule->primaryKey => $id));
		$this->set('perTrainerSchedule', $this->PerTrainerSchedule->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PerTrainerSchedule->create();
			if ($this->PerTrainerSchedule->save($this->request->data)) {
				$this->Session->setFlash(__('The per trainer schedule has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The per trainer schedule could not be saved. Please, try again.'));
			}
		}
		$perTrainers = $this->PerTrainerSchedule->PerTrainer->find('list');
		$this->set(compact('perTrainers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PerTrainerSchedule->exists($id)) {
			throw new NotFoundException(__('Invalid per trainer schedule'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PerTrainerSchedule->save($this->request->data)) {
				$this->Session->setFlash(__('The per trainer schedule has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The per trainer schedule could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PerTrainerSchedule.' . $this->PerTrainerSchedule->primaryKey => $id));
			$this->request->data = $this->PerTrainerSchedule->find('first', $options);
		}
		$perTrainers = $this->PerTrainerSchedule->PerTrainer->find('list');
		$this->set(compact('perTrainers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PerTrainerSchedule->id = $id;
		if (!$this->PerTrainerSchedule->exists()) {
			throw new NotFoundException(__('Invalid per trainer schedule'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PerTrainerSchedule->delete()) {
			$this->Session->setFlash(__('The per trainer schedule has been deleted.'));
		} else {
			$this->Session->setFlash(__('The per trainer schedule could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
