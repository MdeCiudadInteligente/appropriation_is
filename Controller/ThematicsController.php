<?php
App::uses('AppController', 'Controller');
/**
 * Thematics Controller
 *
 * @property Thematic $Thematic
 * @property PaginatorComponent $Paginator
 */
class ThematicsController extends AppController {

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
		$this->Thematic->recursive = 0;
		$this->set('thematics', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Thematic->exists($id)) {
			throw new NotFoundException(__('Invalid thematic'));
		}
		$options = array('conditions' => array('Thematic.' . $this->Thematic->primaryKey => $id));
		$this->set('thematic', $this->Thematic->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Thematic->create();
			if ($this->Thematic->save($this->request->data)) {
				$this->Session->setFlash(__('The thematic has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The thematic could not be saved. Please, try again.'));
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
		if (!$this->Thematic->exists($id)) {
			throw new NotFoundException(__('Invalid thematic'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Thematic->save($this->request->data)) {
				$this->Session->setFlash(__('The thematic has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The thematic could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Thematic.' . $this->Thematic->primaryKey => $id));
			$this->request->data = $this->Thematic->find('first', $options);
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
		$this->Thematic->id = $id;
		if (!$this->Thematic->exists()) {
			throw new NotFoundException(__('Invalid thematic'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Thematic->delete()) {
			$this->Session->setFlash(__('The thematic has been deleted.'));
		} else {
			$this->Session->setFlash(__('The thematic could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
