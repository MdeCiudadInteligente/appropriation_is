<?php
App::uses('AppController', 'Controller');
/**
 * ForProcesses Controller
 *
 * @property ForProcess $ForProcess
 * @property PaginatorComponent $Paginator
 */
class ForProcessesController extends AppController {

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
		$this->ForProcess->recursive = 0;
		$this->set('forProcesses', $this->Paginator->paginate());
	}
	
	
	public function index_service()
	{
		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$id_usuario = $this->Session->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
		$ForProcess=$this->ForProcess->find('all');
		
		$count=0;
		foreach ($ForProcess as $key => $ForProcess) {
			$data['rows'][$count]=array(
					'id'=>$ForProcess['ForProcess']['id'],
					'name_p'=>$ForProcess['ForProcess']['name'],
					'state_p'=>$ForProcess['ForProcess']['state'],
					'creation_date'=>$ForProcess['ForProcess']['creation_date'],
					'modification_date'=>$ForProcess['ForProcess']['modification_date'],
					'user_id'=>$ForProcess['ForProcess']['user_id'],
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
		if (!$this->ForProcess->exists($id)) {
			throw new NotFoundException(__('Invalid process'));
		}
		$options = array('conditions' => array('ForProcess.' . $this->ForProcess->primaryKey => $id));
		$this->set('forProcess', $this->ForProcess->find('first', $options));
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
				
			$name_forprocess= $this->request->data['ForProcess']['name'];
			$verificar_forprocess=$this->ForProcess->query("select distinct name from for_processes where name = '$name_forprocess'");
			$this->set('verificar_forprocess',$verificar_forprocess);
			
			if($verificar_forprocess==Array( )){
				
				$this->ForProcess->create();
				$data=$this->request->data;
				$data['ForProcess']['name'] = ucwords($data['ForProcess']['name']);
				$data['ForProcess']['creation_date']=date('Y-m-d H:i:s');
				$data['ForProcess']['user_id']=$usuario;
				
				
				if ($this->ForProcess->save($data)) {
					$this->Session->setFlash(__('The process has been saved.'));
					return $this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The process could not be saved. Please, try again.'));
				}
			
			}
			else{
				$this->Session->setFlash(__('The process already exists , please check.'));
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
		if (!$this->ForProcess->exists($id)) {
			throw new NotFoundException(__('Invalid process'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ForProcess->save($this->request->data)) {
				$this->Session->setFlash(__('The process has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The process could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ForProcess.' . $this->ForProcess->primaryKey => $id));
			$this->request->data = $this->ForProcess->find('first', $options);
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
		$this->ForProcess->id = $id;
		if (!$this->ForProcess->exists()) {
			throw new NotFoundException(__('Invalid process'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ForProcess->delete()) {
			$this->Session->setFlash(__('The process has been deleted.'));
		} else {
			$this->Session->setFlash(__('The process could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
