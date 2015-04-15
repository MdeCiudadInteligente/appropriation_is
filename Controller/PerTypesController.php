<?php
App::uses('AppController', 'Controller');
/**
 * PerTypes Controller
 *
 * @property PerType $PerType
 * @property PaginatorComponent $Paginator
 */
class PerTypesController extends AppController {

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
		$this->PerType->recursive = 0;
		$this->set('perTypes', $this->Paginator->paginate());
	}
	
	public function index_service()
	{
		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$id_usuario = $this->Session->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
		$PerType=$this->PerType->find('all');
	
		$count=0;
		foreach ($PerType as $key => $PerType) {
			$data['rows'][$count]=array(
					'id'=>$PerType['PerType']['id'],
					'ptname'=>$PerType['PerType']['name'],
					'creation_date'=>$PerType['PerType']['creation_date'],
					'modification_date'=>$PerType['PerType']['modification_date'],
					'user_id'=>$PerType['PerType']['user_id'],
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
		if (!$this->PerType->exists($id)) {
			throw new NotFoundException(__('Invalid per type'));
		}
		$options = array('conditions' => array('PerType.' . $this->PerType->primaryKey => $id));
		$this->set('perType', $this->PerType->find('first', $options));
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
			
			$name_pertype= $this->request->data['PerType']['name'];
			$verificar_pertype=$this->PerType->query("select distinct name from per_types where name = '$name_pertype'");
			$this->set('verificar_pertype',$verificar_pertype);
			
			if($verificar_pertype==Array( )){
				$this->PerType->create();
<<<<<<< HEAD
				$data=$this->request->data;
				$data['PerType']['name'] = ucwords(($data['PerType']['name']));
				$data['PerType']['user_id']=$usuario;
				$data['PerType']['creation_date']=date('Y-m-d H:i:s');
		
				
			if ($this->PerType->save($this->request->data)) {
=======
				
				$data=$this->request->data;
				$data['PerType']['name'] = ucwords($data['PerType']['name']);
				$data['PerType']['creation_date']=date('Y-m-d H:i:s');
				$data['PerType']['user_id']=$usuario;
				
				if ($this->PerType->save($data)) {
>>>>>>> 9d6456fb58d097815c4e4dbf0b8c03b5acaef27e
					$this->Session->setFlash(__('The per type has been saved.'));
					return $this->redirect(array('action' => 'index'));
				} 
				else {
					$this->Session->setFlash(__('The per type could not be saved. Please, try again.'));
				}	
			}
			else{
				$this->Session->setFlash(__('The per type already exists , please check.'));
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
		if (!$this->PerType->exists($id)) {
			throw new NotFoundException(__('Invalid per type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			
			$usuario = $this->Session->read('Auth.User.id_user');
			$this->set('usuario',$usuario);
				
			$name_pertype= $this->request->data['PerType']['name'];
			$verificar_pertype=$this->PerType->query("select distinct name from per_types where name = '$name_pertype'");
			$this->set('verificar_pertype',$verificar_pertype);
				
			if($verificar_pertype==Array( )){
				
				if ($this->PerType->save($this->request->data)) {
					$this->Session->setFlash(__('The per type has been saved.'));
					return $this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The per type could not be saved. Please, try again.'));
				}
			}

			else{
				$this->Session->setFlash(__('The per type already exists , please check.'));
			}
		} else {
			$options = array('conditions' => array('PerType.' . $this->PerType->primaryKey => $id));
			$this->request->data = $this->PerType->find('first', $options);
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
		$this->PerType->id = $id;
		if (!$this->PerType->exists()) {
			throw new NotFoundException(__('Invalid per type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PerType->delete()) {
			$this->Session->setFlash(__('The per type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The per type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
