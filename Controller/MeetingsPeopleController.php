<?php
App::uses('AppController', 'Controller');
/**
 * MeetingsPeople Controller
 *
 * @property MeetingsPerson $MeetingsPerson
 * @property PaginatorComponent $Paginator
 */
class MeetingsPeopleController extends AppController {

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
		$this->MeetingsPerson->recursive = 0;
		$this->set('meetingsPeople', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MeetingsPerson->exists($id)) {
			throw new NotFoundException(__('Invalid meetings person'));
		}
			
		$options = array('conditions' => array('MeetingsPerson.' . $this->MeetingsPerson->primaryKey => $id));
		$this->set('meetingsPerson', $this->MeetingsPerson->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MeetingsPerson->create();
			if ($this->MeetingsPerson->save($this->request->data)) {
				$this->Session->setFlash(__('The meetings person has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The meetings person could not be saved. Please, try again.'));
			}
		}
		$meetings = $this->MeetingsPerson->Meeting->find('list');
		$people = $this->MeetingsPerson->Person->find('list');
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
		if (!$this->MeetingsPerson->exists($id)) {
			throw new NotFoundException(__('Invalid meetings person'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MeetingsPerson->save($this->request->data)) {
				$this->Session->setFlash(__('The meetings person has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The meetings person could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MeetingsPerson.' . $this->MeetingsPerson->primaryKey => $id));
			$this->request->data = $this->MeetingsPerson->find('first', $options);
		}
		$meetings = $this->MeetingsPerson->Meeting->find('list');
		$people = $this->MeetingsPerson->Person->find('list');
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
		$this->MeetingsPerson->id = $id;
		
		if (!$this->MeetingsPerson->exists()) {
			throw new NotFoundException(__('Invalid meetings person'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MeetingsPerson->delete()) {
			$this->Session->setFlash(__('The meetings person has been deleted.'));
		} else {
			$this->Session->setFlash(__('The meetings person could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
