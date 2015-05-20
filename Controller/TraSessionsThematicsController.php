<?php
App::uses('AppController', 'Controller');
/**
 * TraSessionsThematics Controller
 *
 * @property TraSessionsThematic $TraSessionsThematic
 * @property PaginatorComponent $Paginator
 */
class TraSessionsThematicsController extends AppController {

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
		$this->TraSessionsThematic->recursive = 0;
		$this->set('traSessionsThematics', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TraSessionsThematic->exists($id)) {
			throw new NotFoundException(__('Invalid tra sessions thematic'));
		}
		$options = array('conditions' => array('TraSessionsThematic.' . $this->TraSessionsThematic->primaryKey => $id));
		$this->set('traSessionsThematic', $this->TraSessionsThematic->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TraSessionsThematic->create();
			if ($this->TraSessionsThematic->save($this->request->data)) {
				$this->Session->setFlash(__('The tra sessions thematic has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tra sessions thematic could not be saved. Please, try again.'));
			}
		}
		$traSessions = $this->TraSessionsThematic->TraSession->find('list');
		$thematics = $this->TraSessionsThematic->Thematic->find('list');
		$this->set(compact('traSessions', 'thematics'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->TraSessionsThematic->exists($id)) {
			throw new NotFoundException(__('Invalid tra sessions thematic'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TraSessionsThematic->save($this->request->data)) {
				$this->Session->setFlash(__('The tra sessions thematic has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tra sessions thematic could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TraSessionsThematic.' . $this->TraSessionsThematic->primaryKey => $id));
			$this->request->data = $this->TraSessionsThematic->find('first', $options);
		}
		$traSessions = $this->TraSessionsThematic->TraSession->find('list');
		$thematics = $this->TraSessionsThematic->Thematic->find('list');
		$this->set(compact('traSessions', 'thematics'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->TraSessionsThematic->id = $id;
		if (!$this->TraSessionsThematic->exists()) {
			throw new NotFoundException(__('Invalid tra sessions thematic'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TraSessionsThematic->delete()) {
			$this->Session->setFlash(__('The tra sessions thematic has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tra sessions thematic could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
