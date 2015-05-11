<?php
App::uses('AppController', 'Controller');
/**
 * AccTypes Controller
 *
 * @property AccType $AccType
 * @property PaginatorComponent $Paginator
 */
class AccTypesController extends AppController {

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
		$this->AccType->recursive = 0;
		$this->set('accTypes', $this->Paginator->paginate());
	}

	public function index_service()
	{
		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$id_usuario = $this->Session->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
		$Acctype=$this->AccType->find('all');
	
		$count=0;
		foreach ($Acctype as $key => $Acctype) {
			$data['rows'][$count]=array(
					'id'=>$Acctype['AccType']['id'],
					'name'=>$Acctype['AccType']['name'],
					'state'=>$Acctype['AccType']['state'],
					'creation_date'=>$Acctype['AccType']['creation_date'],
					'modification_date'=>$Acctype['AccType']['modification_date'],
					'user_id'=>$Acctype['AccType']['user_id'],
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
		if (!$this->AccType->exists($id)) {
			throw new NotFoundException(__('Invalid acc type'));
		}
		$options = array('conditions' => array('AccType.' . $this->AccType->primaryKey => $id));
		$this->set('accType', $this->AccType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AccType->create();
			if ($this->AccType->save($this->request->data)) {
				$this->Session->setFlash(__('The acc type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The acc type could not be saved. Please, try again.'));
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
		if (!$this->AccType->exists($id)) {
			throw new NotFoundException(__('Invalid acc type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AccType->save($this->request->data)) {
				$this->Session->setFlash(__('The acc type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The acc type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AccType.' . $this->AccType->primaryKey => $id));
			$this->request->data = $this->AccType->find('first', $options);
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
		$this->AccType->id = $id;
		if (!$this->AccType->exists()) {
			throw new NotFoundException(__('Invalid acc type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AccType->delete()) {
			$this->Session->setFlash(__('The acc type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The acc type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
