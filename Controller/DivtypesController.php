<?php
App::uses('AppController', 'Controller');
/**
 * Divtypes Controller
 *
 * @property Divtype $Divtype
 * @property PaginatorComponent $Paginator
 */
class DivtypesController extends AppController {

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
		$this->Divtype->recursive = 0;
		$this->set('divtypes', $this->Paginator->paginate());
	}
	
	public function index_service()
	{
		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$id_usuario = $this->Session->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
		$Divtype=$this->Divtype->find('all',array('conditions'=>array('Divtype.state' => '1')));
		//$sitetype=$this->SiteType->find('all');
		$count=0;
		foreach ($Divtype as $key => $Divtype) {
			$data['rows'][$count]=array(
					'id'=>$Divtype['Divtype']['id'],
					't_divulgacion'=>$Divtype['Divtype']['name'],
					'estado_td'=>$Divtype['Divtype']['state'],
					'creation_date'=>$Divtype['Divtype']['creation_date'],
					'modification_date'=>$Divtype['Divtype']['modification_date'],
					'user_id'=>$Divtype['Divtype']['user_id'],
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
		if (!$this->Divtype->exists($id)) {
			throw new NotFoundException(__('Invalid divtype'));
		}
		$options = array('conditions' => array('Divtype.' . $this->Divtype->primaryKey => $id));
		$this->set('divtype', $this->Divtype->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Divtype->create();
			if ($this->Divtype->save($this->request->data)) {
				$this->Session->setFlash(__('The divtype has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The divtype could not be saved. Please, try again.'));
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
		if (!$this->Divtype->exists($id)) {
			throw new NotFoundException(__('Invalid divtype'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Divtype->save($this->request->data)) {
				$this->Session->setFlash(__('The divtype has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The divtype could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Divtype.' . $this->Divtype->primaryKey => $id));
			$this->request->data = $this->Divtype->find('first', $options);
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
		$this->Divtype->id = $id;
		if (!$this->Divtype->exists()) {
			throw new NotFoundException(__('Invalid divtype'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Divtype->delete()) {
			$this->Session->setFlash(__('The divtype has been deleted.'));
		} else {
			$this->Session->setFlash(__('The divtype could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
