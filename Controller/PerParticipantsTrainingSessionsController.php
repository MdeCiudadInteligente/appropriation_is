<?php
App::uses('AppController', 'Controller');
/**
 * PerParticipantsTrainingSessions Controller
 *
 * @property PerParticipantsTrainingSession $PerParticipantsTrainingSession
 * @property PaginatorComponent $Paginator
 */
class PerParticipantsTrainingSessionsController extends AppController {

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
		$this->PerParticipantsTrainingSession->recursive = 0;
		$this->set('perParticipantsTrainingSessions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PerParticipantsTrainingSession->exists($id)) {
			throw new NotFoundException(__('Invalid per participants training session'));
		}
		$options = array('conditions' => array('PerParticipantsTrainingSession.' . $this->PerParticipantsTrainingSession->primaryKey => $id));
		$this->set('perParticipantsTrainingSession', $this->PerParticipantsTrainingSession->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PerParticipantsTrainingSession->create();
			if ($this->PerParticipantsTrainingSession->save($this->request->data)) {
				$this->Session->setFlash(__('The per participants training session has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The per participants training session could not be saved. Please, try again.'));
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
		if (!$this->PerParticipantsTrainingSession->exists($id)) {
			throw new NotFoundException(__('Invalid per participants training session'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PerParticipantsTrainingSession->save($this->request->data)) {
				$this->Session->setFlash(__('The per participants training session has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The per participants training session could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PerParticipantsTrainingSession.' . $this->PerParticipantsTrainingSession->primaryKey => $id));
			$this->request->data = $this->PerParticipantsTrainingSession->find('first', $options);
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
		$this->PerParticipantsTrainingSession->id = $id;
		if (!$this->PerParticipantsTrainingSession->exists()) {
			throw new NotFoundException(__('Invalid per participants training session'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PerParticipantsTrainingSession->delete()) {
			$this->Session->setFlash(__('The per participants training session has been deleted.'));
		} else {
			$this->Session->setFlash(__('The per participants training session could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
