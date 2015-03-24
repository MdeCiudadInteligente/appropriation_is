<?php
App::uses('AppController', 'Controller');
/**
 * PerTrainers Controller
 *
 * @property PerTrainer $PerTrainer
 * @property PaginatorComponent $Paginator
 */
class PerTrainersController extends AppController {

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
		$this->PerTrainer->recursive = 0;
		$this->set('perTrainers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PerTrainer->exists($id)) {
			throw new NotFoundException(__('Invalid per trainer'));
		}
		$options = array('conditions' => array('PerTrainer.' . $this->PerTrainer->primaryKey => $id));
		$this->set('perTrainer', $this->PerTrainer->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PerTrainer->create();
			if ($this->PerTrainer->save($this->request->data)) {
				$this->Session->setFlash(__('The per trainer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The per trainer could not be saved. Please, try again.'));
			}
		}
		$perTrainerTypes = $this->PerTrainer->PerTrainerType->find('list');
		$perProfessions = $this->PerTrainer->PerProfession->find('list');
		$perPeopleTypes = $this->PerTrainer->PerPeopleType->find('list');
		$perTrainerFunds = $this->PerTrainer->PerTrainerFund->find('list');
		$sites = $this->PerTrainer->Site->find('list');
		$this->set(compact('perTrainerTypes', 'perProfessions', 'perPeopleTypes', 'perTrainerFunds', 'sites'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PerTrainer->exists($id)) {
			throw new NotFoundException(__('Invalid per trainer'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PerTrainer->save($this->request->data)) {
				$this->Session->setFlash(__('The per trainer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The per trainer could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PerTrainer.' . $this->PerTrainer->primaryKey => $id));
			$this->request->data = $this->PerTrainer->find('first', $options);
		}
		$perTrainerTypes = $this->PerTrainer->PerTrainerType->find('list');
		$perProfessions = $this->PerTrainer->PerProfession->find('list');
		$perPeopleTypes = $this->PerTrainer->PerPeopleType->find('list');
		$perTrainerFunds = $this->PerTrainer->PerTrainerFund->find('list');
		$sites = $this->PerTrainer->Site->find('list');
		$this->set(compact('perTrainerTypes', 'perProfessions', 'perPeopleTypes', 'perTrainerFunds', 'sites'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PerTrainer->id = $id;
		if (!$this->PerTrainer->exists()) {
			throw new NotFoundException(__('Invalid per trainer'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PerTrainer->delete()) {
			$this->Session->setFlash(__('The per trainer has been deleted.'));
		} else {
			$this->Session->setFlash(__('The per trainer could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
