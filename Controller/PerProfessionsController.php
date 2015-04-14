<?php
App::uses('AppController', 'Controller');
/**
 * PerProfessions Controller
 *
 * @property PerProfession $PerProfession
 * @property PaginatorComponent $Paginator
 */
class PerProfessionsController extends AppController {

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
		$this->PerProfession->recursive = 0;
		$this->set('perProfessions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PerProfession->exists($id)) {
			throw new NotFoundException(__('Invalid per profession'));
		}
		$options = array('conditions' => array('PerProfession.' . $this->PerProfession->primaryKey => $id));
		$this->set('perProfession', $this->PerProfession->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PerProfession->create();
			if ($this->PerProfession->save($this->request->data)) {
				$this->Session->setFlash(__('The per profession has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The per profession could not be saved. Please, try again.'));
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
		if (!$this->PerProfession->exists($id)) {
			throw new NotFoundException(__('Invalid per profession'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PerProfession->save($this->request->data)) {
				$this->Session->setFlash(__('The per profession has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The per profession could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PerProfession.' . $this->PerProfession->primaryKey => $id));
			$this->request->data = $this->PerProfession->find('first', $options);
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
		$this->PerProfession->id = $id;
		if (!$this->PerProfession->exists()) {
			throw new NotFoundException(__('Invalid per profession'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PerProfession->delete()) {
			$this->Session->setFlash(__('The per profession has been deleted.'));
		} else {
			$this->Session->setFlash(__('The per profession could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
