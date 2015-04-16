<?php
App::uses('AppController', 'Controller');
/**
 * TraProcesses Controller
 *
 * @property TraProcess $TraProcess
 * @property PaginatorComponent $Paginator
 */
class TraProcessesController extends AppController {

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
		$this->TraProcess->recursive = 0;
		$this->set('traProcesses', $this->Paginator->paginate());
	}
	

	public function index_service()
	{
		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$id_usuario = $this->Session->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
		$TraProcess=$this->TraProcess->find('all');
	
		$count=0;
		foreach ($TraProcess as $key => $TraProcess) {
			$data['rows'][$count]=array(
					'id'=>$TraProcess['TraProcess']['id'],
					'name_p'=>$TraProcess['TraProcess']['name'],
					'state_p'=>$TraProcess['TraProcess']['state'],
					'creation_date'=>$TraProcess['TraProcess']['creation_date'],
					'modification_date'=>$TraProcess['TraProcess']['modification_date'],
					'user_id'=>$TraProcess['TraProcess']['user_id'],
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
		if (!$this->TraProcess->exists($id)) {
			throw new NotFoundException(__('Invalid training process'));
		}
		$options = array('conditions' => array('TraProcess.' . $this->TraProcess->primaryKey => $id));
		$this->set('traProcess', $this->TraProcess->find('first', $options));
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
				
			$name_process= $this->request->data['TraProcess']['name'];
			$verificar_process=$this->TraProcess->query("select distinct name from tra_processes where name = '$name_process'");
			$this->set('verificar_process',$verificar_process);
			
			if($verificar_process==Array( )){
			
				
				$this->TraProcess->create();
				
				$data=$this->request->data;
				$data['TraProcess']['name'] = ucwords($data['TraProcess']['name']);
				$data['TraProcess']['creation_date']=date('Y-m-d H:i:s');
				$data['TraProcess']['user_id']=$usuario;
				
				
				if ($this->TraProcess->save($data)) {
					$this->Session->setFlash(__('The training process has been saved.'));
					return $this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The training process could not be saved. Please, try again.'));
				}
			}
			else{
				$this->Session->setFlash(__('The training process already exists , please check.'));
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
		if (!$this->TraProcess->exists($id)) {
			throw new NotFoundException(__('Invalid training process'));
		}
		if ($this->request->is(array('post', 'put'))) {
		
				if ($this->TraProcess->save($this->request->data)) {
					$this->Session->setFlash(__('The TraProcess has been saved.'));
					return $this->redirect(array('action' => 'index'));
				} 
				else 
				{
					$this->Session->setFlash(__('The TraProcess could not be saved. Please, try again.'));
				}
		}			
		else 
		{
			$options = array('conditions' => array('TraProcess.' . $this->TraProcess->primaryKey => $id));
			$this->request->data = $this->TraProcess->find('first', $options);
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
		$this->TraProcess->id = $id;
		if (!$this->TraProcess->exists()) {
			throw new NotFoundException(__('Invalid training process'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TraProcess->delete()) {
			$this->Session->setFlash(__('The training process has been deleted.'));
		} else {
			$this->Session->setFlash(__('The training process could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	//función para el servicio de procesos.
	
	public function getTraProcesses() {
		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$queryString=$_GET['q'];
		$condition=array('OR' => array(
				array('TraProcess.name LIKE' => '%'.$queryString.'%')
		));
	
		$traprocess=$this->TraProcess->find('list',array('fields'=>array('TraProcess.id','TraProcess.name'),'order' => array('TraProcess.name' => 'ASC'),'conditions' => $condition));
		//debug($trally);
		foreach ($traprocess as $id => $value) {
	
			$json_data = array();
			$json_data['id']=$id;
			$json_data['name']=$value;
			$data[]=$json_data;
		}
	
		$this->set(compact('data')); // Pass $data to the view
		$this->set('_serialize', 'data'); // Let the JsonView class know what variable to use
	
	}


}
