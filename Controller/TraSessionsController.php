<?php
App::uses('AppController', 'Controller');
/**
 * TraSessions Controller
 *
 * @property TraSession $TraSession
 * @property PaginatorComponent $Paginator
 */
class TraSessionsController extends AppController {

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
		$this->TraSession->recursive = 0;
		$this->set('traSessions', $this->Paginator->paginate());
	}
	
	
	
	public function index_service()
	{
		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$id_usuario = $this->TraSession->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
		$Session=$this->TraSession->find('all');
		$count=0;
		foreach ($Session as $key => $Session) {
			$data['rows'][$count]=array(
					'id'=>$Session['TraSession']['id'],
					'training'=>$Session['Training']['code'],
					'observation'=>$Session['TraSession']['observation'],
					'start_date'=>$Session['TraSession']['start_date'],
					'start_time'=>$Session['TraSession']['start_time'],
					'end_time'=>$Session['TraSession']['end_time'],
					'creation_date'=>$Session['TraSession']['creation_date'],
					'modification_date'=>$Session['TraSession']['modification_date'],
					'user_id'=>$Session['TraSession']['user_id'],
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
		if (!$this->TraSession->exists($id)) {
			throw new NotFoundException(__('Invalid tra session'));
		}
		$options = array('conditions' => array('TraSession.' . $this->TraSession->primaryKey => $id));
		$this->set('traSession', $this->TraSession->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$usuario = $this->Session->read('Auth.User.id_user');
			$this->set('usuario',$usuario);
					
			$this->TraSession->create();
			
			$data=$this->request->data;
			$data['TraSession']['creation_date']=date('Y-m-d H:i:s');
			$data['TraSession']['user_id']=$usuario;
			
			
			if ($this->TraSession->save($data)) {
				$this->Session->setFlash(__('The tra session has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tra session could not be saved. Please, try again.'));
			}
		}
		$trainings = $this->TraSession->Training->find('list');
		$this->set(compact('trainings'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->TraSession->exists($id)) {
			throw new NotFoundException(__('Invalid tra session'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TraSession->save($this->request->data)) {
				$this->Session->setFlash(__('The tra session has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tra session could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TraSession.' . $this->TraSession->primaryKey => $id));
			$this->request->data = $this->TraSession->find('first', $options);
		}
		$trainings = $this->TraSession->Training->find('list');
		$this->set(compact('trainings'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->TraSession->id = $id;
		if (!$this->TraSession->exists()) {
			throw new NotFoundException(__('Invalid tra session'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TraSession->delete()) {
			$this->Session->setFlash(__('The tra session has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tra session could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
