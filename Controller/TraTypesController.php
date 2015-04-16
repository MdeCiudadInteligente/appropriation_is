<?php
App::uses('AppController', 'Controller');
/**
 * TraTypes Controller
 *
 * @property TraType $TraType
 * @property PaginatorComponent $Paginator
 */
class TraTypesController extends AppController {

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
		$this->TraType->recursive = 0;
		$this->set('traTypes', $this->Paginator->paginate());
	}
	

	public function index_service()
	{
		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$id_usuario = $this->Session->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
		$TraType=$this->TraType->find('all');
	
		$count=0;
		foreach ($TraType as $key => $TraType) {
			$data['rows'][$count]=array(
					'id'=>$TraType['TraType']['id'],
					'ntratype'=>$TraType['TraType']['name'],
					'state_fortype'=>$TraType['TraType']['state'],
					'creation_date'=>$TraType['TraType']['creation_date'],
					'modification_date'=>$TraType['TraType']['modification_date'],
					'user_id'=>$TraType['TraType']['user_id'],
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
		if (!$this->TraType->exists($id)) {
			throw new NotFoundException(__('Invalid training type'));
		}
		$options = array('conditions' => array('TraType.' . $this->TraType->primaryKey => $id));
		$this->set('traType', $this->TraType->find('first', $options));
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
			
			$name_tratype= $this->request->data['TraType']['name'];
			$verificar_tratype=$this->TraType->query("select distinct name from tra_types where name = '$name_tratype'");
			$this->set('verificar_tratype',$verificar_tratype);
			
			if($verificar_tratype==Array( )){
				$this->TraType->create();
				
				$data=$this->request->data;
				$data['TraType']['name'] = ucwords(($data['TraType']['name']));
				$data['TraType']['user_id']=$usuario;
				$data['TraType']['creation_date']=date('Y-m-d H:i:s');
								
				if ($this->TraType->save($data)) {
					$this->Session->setFlash(__('The training type has been saved.'));
					return $this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The training type could not be saved. Please, try again.'));
				}
			}
			else{
				$this->Session->setFlash(__('The training type already exists , please check.'));
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
		if (!$this->TraType->exists($id)) {
			throw new NotFoundException(__('Invalid training type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			
				if ($this->TraType->save($this->request->data)) {
					$this->Session->setFlash(__('The TraType has been saved.'));
					return $this->redirect(array('action' => 'index'));
				} 
				else 
				{
					$this->Session->setFlash(__('The TraType could not be saved. Please, try again.'));
				}
		}
		else 
		{
			$options = array('conditions' => array('TraType.' . $this->TraType->primaryKey => $id));
			$this->request->data = $this->TraType->find('first', $options);
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
		$this->TraType->id = $id;
		if (!$this->TraType->exists()) {
			throw new NotFoundException(__('Invalid training type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TraType->delete()) {
			$this->Session->setFlash(__('The training type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The training type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
