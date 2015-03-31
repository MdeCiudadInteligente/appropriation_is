<?php
App::uses('AppController', 'Controller');
/**
 * Fortypes Controller
 *
 * @property Fortype $Fortype
 * @property PaginatorComponent $Paginator
 */
class FortypesController extends AppController {

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
		$this->Fortype->recursive = 0;
		$this->set('fortypes', $this->Paginator->paginate());
	}
	
	public function index_service()
	{
		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$id_usuario = $this->Session->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
		$Fortype=$this->Fortype->find('all');
		
		$count=0;
		foreach ($Fortype as $key => $Fortype) {
			$data['rows'][$count]=array(
					'id'=>$Fortype['Fortype']['id'],
					'nfortype'=>$Fortype['Fortype']['name'],
					'state_fortype'=>$Fortype['Fortype']['state'],
					'creation_date'=>$Fortype['Fortype']['creation_date'],
					'modification_date'=>$Fortype['Fortype']['modification_date'],
					'user_id'=>$Fortype['Fortype']['user_id'],
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
		if (!$this->Fortype->exists($id)) {
			throw new NotFoundException(__('Invalid fortype'));
		}
		$options = array('conditions' => array('Fortype.' . $this->Fortype->primaryKey => $id));
		$this->set('fortype', $this->Fortype->find('first', $options));
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
			
			$name_fortype= $this->request->data['Fortype']['name'];
			$verificar_fortype=$this->Fortype->query("select distinct name from fortypes where name = '$name_fortype'");
			$this->set('verificar_fortype',$verificar_fortype);
			
			if($verificar_fortype==Array( )){
			
				$this->Fortype->create();
				$data=$this->request->data;
				$data['Fortype']['name'] = ucwords($data['Fortype']['name']);
				$data['Fortype']['creation_date']=date('Y-m-d H:i:s');
				$data['Fortype']['user_id']=$usuario;
				
				if ($this->Fortype->save($this->request->data)) {
					$this->Session->setFlash(__('The fortype has been saved.'));
					return $this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The fortype could not be saved. Please, try again.'));
				}
			}
			else
			{
				$this->Session->setFlash(__('The fortype already exists, please check.'));
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
		if (!$this->Fortype->exists($id)) {
			throw new NotFoundException(__('Invalid fortype'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Fortype->save($this->request->data)) {
				$this->Session->setFlash(__('The fortype has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fortype could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Fortype.' . $this->Fortype->primaryKey => $id));
			$this->request->data = $this->Fortype->find('first', $options);
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
		$this->Fortype->id = $id;
		if (!$this->Fortype->exists()) {
			throw new NotFoundException(__('Invalid fortype'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Fortype->delete()) {
			$this->Session->setFlash(__('The fortype has been deleted.'));
		} else {
			$this->Session->setFlash(__('The fortype could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
