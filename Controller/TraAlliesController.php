<?php
App::uses('AppController', 'Controller');
/**
 * TraAllies Controller
 *
 * @property TraAlly $TraAlly
 * @property PaginatorComponent $Paginator
 */
class TraAlliesController extends AppController {

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
		$this->TraAlly->recursive = 0;
		$this->set('traAllies', $this->Paginator->paginate());
	}
	
	public function index_service()
	{
		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$id_usuario = $this->Session->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
		$TraAlly=$this->TraAlly->find('all');
	
		$count=0;
	
		foreach ($TraAlly as $key => $TraAlly) {
			$data['rows'][$count]=array(
					'id'=>$TraAlly['TraAlly']['id'],
					'nally'=>$TraAlly['TraAlly']['name'],
					'state_ally'=>$TraAlly['TraAlly']['state'],
					'creation_date'=>$TraAlly['TraAlly']['creation_date'],
					'modification_date'=>$TraAlly['TraAlly']['modification_date'],
					'user_id'=>$TraAlly['TraAlly']['user_id'],
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
		if (!$this->TraAlly->exists($id)) {
			throw new NotFoundException(__('Invalid ally'));
		}
		$options = array('conditions' => array('TraAlly.' . $this->TraAlly->primaryKey => $id));
		$this->set('traAlly', $this->TraAlly->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TraAlly->create();
			if ($this->TraAlly->save($this->request->data)) {
				$this->Session->setFlash(__('The ally has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ally could not be saved. Please, try again.'));
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
		if (!$this->TraAlly->exists($id)) {
			throw new NotFoundException(__('Invalid tra ally'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TraAlly->save($this->request->data)) {
				$this->Session->setFlash(__('The ally has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ally could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TraAlly.' . $this->TraAlly->primaryKey => $id));
			$this->request->data = $this->TraAlly->find('first', $options);
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
		$this->TraAlly->id = $id;
		if (!$this->TraAlly->exists()) {
			throw new NotFoundException(__('Invalid tra ally'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TraAlly->delete()) {
			$this->Session->setFlash(__('The ally has been deleted.'));
		} else {
			$this->Session->setFlash(__('The ally could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}