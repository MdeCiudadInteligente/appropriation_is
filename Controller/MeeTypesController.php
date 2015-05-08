<?php
App::uses('AppController', 'Controller');
/**
 * MeeTypes Controller
 *
 * @property MeeType $MeeType
 * @property PaginatorComponent $Paginator
 */
class MeeTypesController extends AppController {

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
		$this->MeeType->recursive = 0;
		$this->set('meeTypes', $this->Paginator->paginate());
	}
	
	public function index_service()
	{
		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$id_usuario = $this->Session->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
		$Meetype=$this->MeeType->find('all');
	
		$count=0;
		foreach ($Meetype as $key => $Meetype) {
			$data['rows'][$count]=array(
					'id'=>$Meetype['MeeType']['id'],
					'name'=>$Meetype['MeeType']['name'],
					'state'=>$Meetype['MeeType']['state'],
					'creation_date'=>$Meetype['MeeType']['creation_date'],
					'modification_date'=>$Meetype['MeeType']['modification_date'],
					'user_id'=>$Meetype['MeeType']['user_id'],
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
		if (!$this->MeeType->exists($id)) {
			throw new NotFoundException(__('Invalid mee type'));
		}
		$options = array('conditions' => array('MeeType.' . $this->MeeType->primaryKey => $id));
		$this->set('meeType', $this->MeeType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MeeType->create();
			if ($this->MeeType->save($this->request->data)) {
				$this->Session->setFlash(__('The mee type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mee type could not be saved. Please, try again.'));
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
		if (!$this->MeeType->exists($id)) {
			throw new NotFoundException(__('Invalid mee type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MeeType->save($this->request->data)) {
				$this->Session->setFlash(__('The mee type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mee type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MeeType.' . $this->MeeType->primaryKey => $id));
			$this->request->data = $this->MeeType->find('first', $options);
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
		$this->MeeType->id = $id;
		if (!$this->MeeType->exists()) {
			throw new NotFoundException(__('Invalid mee type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MeeType->delete()) {
			$this->Session->setFlash(__('The mee type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The mee type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
