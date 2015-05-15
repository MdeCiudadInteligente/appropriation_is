<?php
App::uses('AppController', 'Controller');
/**
 * PerMaritalStatuses Controller
 *
 * @property PerMaritalStatus $PerMaritalStatus
 * @property PaginatorComponent $Paginator
 */
class PerMaritalStatusesController extends AppController {

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
		$this->PerMaritalStatus->recursive = 0;
		$this->set('perMaritalStatuses', $this->Paginator->paginate());
	}
	
	public function index_service()
	{
		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$id_usuario = $this->Session->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
		$permaritalstatus=$this->PerMaritalStatus->find('all');
	
		$count=0;
		foreach ($permaritalstatus as $key => $permaritalstatus) {
			$data['rows'][$count]=array(
					'id'=>$permaritalstatus['PerMaritalStatus']['id'],
					'name'=>$permaritalstatus['PerMaritalStatus']['name'],					
					'creation_date'=>$permaritalstatus['PerMaritalStatus']['creation_date'],
					'modification_date'=>$permaritalstatus['PerMaritalStatus']['modification_date'],
					'user_id'=>$permaritalstatus['PerMaritalStatus']['user_id'],
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
		if (!$this->PerMaritalStatus->exists($id)) {
			throw new NotFoundException(__('Invalid per marital status'));
		}
		$options = array('conditions' => array('PerMaritalStatus.' . $this->PerMaritalStatus->primaryKey => $id));
		$this->set('perMaritalStatus', $this->PerMaritalStatus->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PerMaritalStatus->create();
			if ($this->PerMaritalStatus->save($this->request->data)) {
				$this->Session->setFlash(__('The per marital status has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The per marital status could not be saved. Please, try again.'));
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
		if (!$this->PerMaritalStatus->exists($id)) {
			throw new NotFoundException(__('Invalid per marital status'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PerMaritalStatus->save($this->request->data)) {
				$this->Session->setFlash(__('The per marital status has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The per marital status could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PerMaritalStatus.' . $this->PerMaritalStatus->primaryKey => $id));
			$this->request->data = $this->PerMaritalStatus->find('first', $options);
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
		$this->PerMaritalStatus->id = $id;
		if (!$this->PerMaritalStatus->exists()) {
			throw new NotFoundException(__('Invalid per marital status'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PerMaritalStatus->delete()) {
			$this->Session->setFlash(__('The per marital status has been deleted.'));
		} else {
			$this->Session->setFlash(__('The per marital status could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
