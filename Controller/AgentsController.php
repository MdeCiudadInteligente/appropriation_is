<?php
App::uses('AppController', 'Controller');
/**
 * Agents Controller
 *
 * @property Agent $Agent
 * @property PaginatorComponent $Paginator
 */
class AgentsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	
	public $paginate = array(
			//'fields' => array('Meeting.meeting_type'),
			'limit' => 10,
			'order'=> array(
					'Agents.id_agent' => 'desc'
			)
	);
	
	public function isAuthorized($user) {
		// Any registered user can access public functions
	
	
	if ((isset($user['permission_level']) && $user['permission_level'] == '1')||(isset($user['permission_level']) && $user['permission_level'] == '4')||(isset($user['permission_level']) && $user['permission_level'] == '5')) 
		{
			return true;
		}	
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Agent->recursive = 0;
		$this->set('agents', $this->Paginator->paginate());
	}
	
	public function index_service()
	{
		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$id_usuario = $this->Session->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
		$agent=$this->Agent->find('all');
		$count=0;
		foreach ($agent as $key => $agent) {
			$data['rows'][$count]=array(
					'id'=>$agent['Agent']['id_agent'],
					'npersona'=>$agent['Person']['name'],
					'nzona'=>$agent['Zone']['zone_name'],
					'estado_agente'=>$agent['Agent']['agent_estado'],
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
		if (!$this->Agent->exists($id)) {
			throw new NotFoundException(__('Invalid agent'));
		}
		
		$options = array('conditions' => array('Agent.' . $this->Agent->primaryKey => $id));
		$this->set('agent', $this->Agent->find('first', $options));
		//$people = $this->Agent->Person->find('list', array('fields'=>array('Person.id_person','Person.completename')));
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
			
			$name_agents= $this->request->data['Agent']['person_id'];
			$verificar_agent=$this->Agent->query("select distinct person_id from agents where person_id = '$name_agents'");
			$this->set('verificar_agent',$verificar_agent);
			
			if($verificar_agent==Array( )){				
			
				$this->Agent->create();
				$data=$this->request->data;
				$data['Agent']['creation_date']=date('Y-m-d H:i:s');
				$data['Agent']['user_id']=$usuario;
							
				if ($this->Agent->save($data)) {
						$this->Session->setFlash(__('The agent has been saved.'));
						return $this->redirect(array('action' => 'index'));
				}
				else
					{
						$this->Session->setFlash(__('The agent could not be saved.Please,try again.'));
					}
				}
				else
				{
					$this->Session->setFlash(__('The person is already agent, please check.'));
				}
		}
		$people = $this->Agent->Person->find('list', array('fields'=>array('Person.id_person','Person.completename'),'order' => array('Person.completename' => 'ASC')));
		$zones = $this->Agent->Zone->find('list');
		$this->set(compact('people', 'zones'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Agent->exists($id)) {
			throw new NotFoundException(__('Invalid agent'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Agent->save($this->request->data)) {
				$this->Session->setFlash(__('The agent has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The agent could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Agent.' . $this->Agent->primaryKey => $id));
			$this->request->data = $this->Agent->find('first', $options);
		}
		$people = $this->Agent->Person->find('list', array('fields'=>array('Person.id_person','Person.completename'),'order' => array('Person.completename' => 'ASC')));
		$zones = $this->Agent->Zone->find('list');
		$this->set(compact('people', 'zones'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Agent->id = $id;
		if (!$this->Agent->exists()) {
			throw new NotFoundException(__('Invalid agent'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Agent->delete()) {
			$this->Session->setFlash(__('The agent has been deleted.'));
		} else {
			$this->Session->setFlash(__('The agent could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
