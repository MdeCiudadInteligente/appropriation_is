<?php
App::uses('AppController', 'Controller');
/**
 * PerParticipantsTrainings Controller
 *
 * @property PerParticipantsTraining $PerParticipantsTraining
 * @property PaginatorComponent $Paginator
 */
class PerParticipantsTrainingsController extends AppController {

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
		$this->PerParticipantsTraining->recursive = 0;
		$this->set('perParticipantsTrainings', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PerParticipantsTraining->exists($id)) {
			throw new NotFoundException(__('Invalid per participants training'));
		}
		$options = array('conditions' => array('PerParticipantsTraining.' . $this->PerParticipantsTraining->primaryKey => $id));
		$this->set('perParticipantsTraining', $this->PerParticipantsTraining->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PerParticipantsTraining->create();
			if ($this->PerParticipantsTraining->save($this->request->data)) {
				$this->Session->setFlash(__('The per participants training has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The per participants training could not be saved. Please, try again.'));
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
		if (!$this->PerParticipantsTraining->exists($id)) {
			throw new NotFoundException(__('Invalid per participants training'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PerParticipantsTraining->save($this->request->data)) {
				$this->Session->setFlash(__('The per participants training has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The per participants training could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PerParticipantsTraining.' . $this->PerParticipantsTraining->primaryKey => $id));
			$this->request->data = $this->PerParticipantsTraining->find('first', $options);
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
		$this->PerParticipantsTraining->id = $id;
		if (!$this->PerParticipantsTraining->exists()) {
			throw new NotFoundException(__('Invalid per participants training'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PerParticipantsTraining->delete()) {
			$this->Session->setFlash(__('The per participants training has been deleted.'));
		} else {
			$this->Session->setFlash(__('The per participants training could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
