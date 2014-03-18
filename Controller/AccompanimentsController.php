<?php
App::uses('AppController', 'Controller');
/**
 * Accompaniments Controller
 *
 * @property Accompaniment $Accompaniment
 * @property PaginatorComponent $Paginator
 */
class AccompanimentsController extends AppController {

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
		$this->Accompaniment->recursive = 0;
		$this->set('accompaniments', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Accompaniment->exists($id)) {
			throw new NotFoundException(__('Invalid accompaniment'));
		}
		$options = array('conditions' => array('Accompaniment.' . $this->Accompaniment->primaryKey => $id));
		$this->set('accompaniment', $this->Accompaniment->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Accompaniment->create();
			if ($this->Accompaniment->save($this->request->data)) {
				$this->Session->setFlash(__('The accompaniment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The accompaniment could not be saved. Please, try again.'));
			}
		}
		$sites = $this->Accompaniment->Site->find('list');
		$this->set(compact('sites'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Accompaniment->exists($id)) {
			throw new NotFoundException(__('Invalid accompaniment'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Accompaniment->save($this->request->data)) {
				$this->Session->setFlash(__('The accompaniment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The accompaniment could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Accompaniment.' . $this->Accompaniment->primaryKey => $id));
			$this->request->data = $this->Accompaniment->find('first', $options);
		}
		$sites = $this->Accompaniment->Site->find('list');
		$this->set(compact('sites'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Accompaniment->id = $id;
		if (!$this->Accompaniment->exists()) {
			throw new NotFoundException(__('Invalid accompaniment'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Accompaniment->delete()) {
			$this->Session->setFlash(__('The accompaniment has been deleted.'));
		} else {
			$this->Session->setFlash(__('The accompaniment could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
