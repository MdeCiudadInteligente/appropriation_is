<?php
App::uses('AppController', 'Controller');
/**
 * SitesTrainings Controller
 *
 * @property SitesTraining $SitesTraining
 * @property PaginatorComponent $Paginator
 */
class SitesTrainingsController extends AppController {

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
		$this->SitesTraining->recursive = 0;
		$this->set('sitesTrainings', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SitesTraining->exists($id)) {
			throw new NotFoundException(__('Invalid sites training'));
		}
		$options = array('conditions' => array('SitesTraining.' . $this->SitesTraining->primaryKey => $id));
		$this->set('sitesTraining', $this->SitesTraining->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SitesTraining->create();
			if ($this->SitesTraining->save($this->request->data)) {
				$this->Session->setFlash(__('The sites training has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sites training could not be saved. Please, try again.'));
			}
		}
		$sites = $this->SitesTraining->Site->find('list');
		$trainings = $this->SitesTraining->Training->find('list');
		$this->set(compact('sites', 'trainings'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SitesTraining->exists($id)) {
			throw new NotFoundException(__('Invalid sites training'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SitesTraining->save($this->request->data)) {
				$this->Session->setFlash(__('The sites training has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sites training could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SitesTraining.' . $this->SitesTraining->primaryKey => $id));
			$this->request->data = $this->SitesTraining->find('first', $options);
		}
		$sites = $this->SitesTraining->Site->find('list');
		$trainings = $this->SitesTraining->Training->find('list');
		$this->set(compact('sites', 'trainings'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SitesTraining->id = $id;
		if (!$this->SitesTraining->exists()) {
			throw new NotFoundException(__('Invalid sites training'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SitesTraining->delete()) {
			$this->Session->setFlash(__('The sites training has been deleted.'));
		} else {
			$this->Session->setFlash(__('The sites training could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
