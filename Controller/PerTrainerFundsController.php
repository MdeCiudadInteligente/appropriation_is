<?php
App::uses('AppController', 'Controller');
/**
 * PerTrainerFunds Controller
 *
 * @property PerTrainerFund $PerTrainerFund
 * @property PaginatorComponent $Paginator
 */
class PerTrainerFundsController extends AppController {

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
		$this->PerTrainerFund->recursive = 0;
		$this->set('perTrainerFunds', $this->Paginator->paginate());
	}
	
	public function index_service()
	{
		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$id_usuario = $this->Session->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
		$trainerfund=$this->PerTrainerFund->find('all');		
		$count=0;
		
		foreach ($trainerfund as $key => $trainerfund) {
			$data['rows'][$count]=array(
					'id'=>$trainerfund['PerTrainerFund']['id'],
					'name'=>$trainerfund['PerTrainerFund']['name'],	
					'user_id'=>$trainerfund['PerTrainerFund']['user_id'],
					'creation_date'=>$trainerfund['PerTrainerFund']['creation_date'],
					'modification_date'=>$trainerfund['PerTrainerFund']['modification_date'],					
			);
			$count++;
		}
		$this->set(compact('data'));
		$this->set('_serialize', 'data'); // Let the JsonView class know what variable to use
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PerTrainerFund->exists($id)) {
			throw new NotFoundException(__('Invalid per trainer fund'));
		}
		$options = array('conditions' => array('PerTrainerFund.' . $this->PerTrainerFund->primaryKey => $id));
		$this->set('perTrainerFund', $this->PerTrainerFund->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PerTrainerFund->create();
			if ($this->PerTrainerFund->save($this->request->data)) {
				$this->Session->setFlash(__('The per trainer fund has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The per trainer fund could not be saved. Please, try again.'));
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
		if (!$this->PerTrainerFund->exists($id)) {
			throw new NotFoundException(__('Invalid per trainer fund'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PerTrainerFund->save($this->request->data)) {
				$this->Session->setFlash(__('The per trainer fund has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The per trainer fund could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PerTrainerFund.' . $this->PerTrainerFund->primaryKey => $id));
			$this->request->data = $this->PerTrainerFund->find('first', $options);
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
		$this->PerTrainerFund->id = $id;
		if (!$this->PerTrainerFund->exists()) {
			throw new NotFoundException(__('Invalid per trainer fund'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PerTrainerFund->delete()) {
			$this->Session->setFlash(__('The per trainer fund has been deleted.'));
		} else {
			$this->Session->setFlash(__('The per trainer fund could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}