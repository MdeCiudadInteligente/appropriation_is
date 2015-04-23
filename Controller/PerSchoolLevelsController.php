<?php
App::uses('AppController', 'Controller');
/**
 * PerSchoolLevels Controller
 *
 * @property PerSchoolLevel $PerSchoolLevel
 * @property PaginatorComponent $Paginator
 */
class PerSchoolLevelsController extends AppController {

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
		$this->PerSchoolLevel->recursive = 0;
		$this->set('perSchoolLevels', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PerSchoolLevel->exists($id)) {
			throw new NotFoundException(__('Invalid per school level'));
		}
		$options = array('conditions' => array('PerSchoolLevel.' . $this->PerSchoolLevel->primaryKey => $id));
		$this->set('perSchoolLevel', $this->PerSchoolLevel->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PerSchoolLevel->create();
			if ($this->PerSchoolLevel->save($this->request->data)) {
				$this->Session->setFlash(__('The per school level has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The per school level could not be saved. Please, try again.'));
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
		if (!$this->PerSchoolLevel->exists($id)) {
			throw new NotFoundException(__('Invalid per school level'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PerSchoolLevel->save($this->request->data)) {
				$this->Session->setFlash(__('The per school level has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The per school level could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PerSchoolLevel.' . $this->PerSchoolLevel->primaryKey => $id));
			$this->request->data = $this->PerSchoolLevel->find('first', $options);
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
		$this->PerSchoolLevel->id = $id;
		if (!$this->PerSchoolLevel->exists()) {
			throw new NotFoundException(__('Invalid per school level'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PerSchoolLevel->delete()) {
			$this->Session->setFlash(__('The per school level has been deleted.'));
		} else {
			$this->Session->setFlash(__('The per school level could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
