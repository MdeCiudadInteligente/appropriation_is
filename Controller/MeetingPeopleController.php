<?php
App::uses('AppController', 'Controller');
/**
 * MeetingPeople Controller
 *
 * @property MeetingPerson $MeetingPerson
 * @property PaginatorComponent $Paginator
 */
class MeetingPeopleController extends AppController {

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
		$this->MeetingPerson->recursive = 0;
		$this->set('meetingPeople', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MeetingPerson->exists($id)) {
			throw new NotFoundException(__('Invalid meeting person'));
		}
		$options = array('conditions' => array('MeetingPerson.' . $this->MeetingPerson->primaryKey => $id));
		$this->set('meetingPerson', $this->MeetingPerson->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MeetingPerson->create();
			if ($this->MeetingPerson->save($this->request->data)) {
				$this->Session->setFlash(__('The meeting person has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The meeting person could not be saved. Please, try again.'));
			}
		}
		$meetings = $this->MeetingPerson->Meeting->find('list');
		$people = $this->MeetingPerson->Person->find('list');
		$this->set(compact('meetings', 'people'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->MeetingPerson->exists($id)) {
			throw new NotFoundException(__('Invalid meeting person'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MeetingPerson->save($this->request->data)) {
				$this->Session->setFlash(__('The meeting person has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The meeting person could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MeetingPerson.' . $this->MeetingPerson->primaryKey => $id));
			$this->request->data = $this->MeetingPerson->find('first', $options);
		}
		$meetings = $this->MeetingPerson->Meeting->find('list');
		$people = $this->MeetingPerson->Person->find('list');
		$this->set(compact('meetings', 'people'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->MeetingPerson->id = $id;
		if (!$this->MeetingPerson->exists()) {
			throw new NotFoundException(__('Invalid meeting person'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MeetingPerson->delete()) {
			$this->Session->setFlash(__('The meeting person has been deleted.'));
		} else {
			$this->Session->setFlash(__('The meeting person could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
