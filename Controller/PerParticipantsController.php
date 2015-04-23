<?php
App::uses('AppController', 'Controller');
/**
 * PerParticipants Controller
 *
 * @property PerParticipant $PerParticipant
 * @property PaginatorComponent $Paginator
 */
class PerParticipantsController extends AppController {

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
		$this->PerParticipant->recursive = 0;
		$this->set('perParticipants', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PerParticipant->exists($id)) {
			throw new NotFoundException(__('Invalid per participant'));
		}
		$options = array('conditions' => array('PerParticipant.' . $this->PerParticipant->primaryKey => $id));
		$this->set('perParticipant', $this->PerParticipant->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PerParticipant->create();
			if ($this->PerParticipant->save($this->request->data)) {
				$this->Session->setFlash(__('The per participant has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The per participant could not be saved. Please, try again.'));
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
		if (!$this->PerParticipant->exists($id)) {
			throw new NotFoundException(__('Invalid per participant'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PerParticipant->save($this->request->data)) {
				$this->Session->setFlash(__('The per participant has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The per participant could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PerParticipant.' . $this->PerParticipant->primaryKey => $id));
			$this->request->data = $this->PerParticipant->find('first', $options);
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
		$this->PerParticipant->id = $id;
		if (!$this->PerParticipant->exists()) {
			throw new NotFoundException(__('Invalid per participant'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PerParticipant->delete()) {
			$this->Session->setFlash(__('The per participant has been deleted.'));
		} else {
			$this->Session->setFlash(__('The per participant could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
