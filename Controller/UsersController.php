<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {



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
					'Users.id_user' => 'desc'
			)
	);

/**
 * index method
 *
 * @return void
 */
	
	public function isAuthorized($user) {
		// Any registered user can access public functions
	
	
		if ((isset($user['permission_level']) && $user['permission_level'] == '2')||(isset($user['permission_level']) && $user['permission_level'] == '1')||(isset($user['permission_level']) && $user['permission_level'] == '3')||(isset($user['permission_level']) && $user['permission_level'] === '4')) {
			return true;
		}
			
	
		// Default deny
		//return false;
			
	}
	
	public function login() {
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				return $this->redirect($this->Auth->redirect());
			}
			$this->Session->setFlash(__('Invalid username or password, try again'));
		}
		else {
			if($this->Auth->user('id_user')){
			$this->redirect($this->Auth->redirect());	
			}
		}
	}
	
	public function logout() {
		return $this->redirect($this->Auth->logout());
	}
	 
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}
	
	public function index_service()
	{
		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$id_usuario = $this->Session->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
		$user=$this->User->find('all');
		$count=0;
		foreach ($user as $key => $user) {
			$data['rows'][$count]=array(
					'id'=>$user['User']['id_user'],
					'agente'=>$user['Agent']['id_agent'],
					'nusuario'=>$user['User']['username'],
					'nivel_permiso'=>$user['User']['permission_level'],
					'estado'=>$user['User']['user_estado'],
					'creation_date'=>$user['User']['creation_date'],
					'modification_date'=>$user['User']['modification_date'],
					'user_id'=>$user['User']['user_id'],
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
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
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
		
			$username= $this->request->data['User']['username'];
			$agent_id= $this->request->data['User']['agent_id'];
			
			$verificar_usuario=$this->User->query("select distinct username from users where username = '$username'");
			$this->set('verificar_usuario',$verificar_usuario);
			
			$verificar_agent=$this->User->query("select distinct agent_id from users where agent_id = '$agent_id'");
			$this->set('verificar_agent',$verificar_agent);
			
			if($verificar_agent==Array( ))
			{
				if($verificar_usuario==Array( )){						
					
				$this->User->create();
					$data=$this->request->data;
					$data['User']['creation_date']=date('Y-m-d H:i:s');
					$data['User']['user_id']=$usuario;
					
					if ($this->User->save($data)) {
						$this->Session->setFlash(__('El usuario se ha guardado.'));
						return $this->redirect(array('action' => 'index'));
					}
					else
					{
						$this->Session->setFlash(__('El usuario no pudo ser salvado.Por favor ,vuelva a intentarlo.'));
					}
				}
				else
				{
						$this->Session->setFlash(__('El nombre de usuario no está disponible, por favor ingrese uno nuevo.'));
				}
			}
			else 
			{
				$this->Session->setFlash(__('El agente ya tiene usuario, por favor verificar.'));
			}		
			
		}
		$agents = $this->User->Agent->find('list', array('joins' => array(
				array(
						'table' => 'people',
						'alias' => 't1',
						'type' => 'inner',
						'foreignKey' => true,
						'conditions'=> array('t1.id_person = Agent.person_id')
				)
		),'fields'=>array('t1.name')));
		$this->set(compact('agents'));
	}
	
	

/**
 * edit method
 *1
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) 
		{
			if ($this->User->save($this->request->data)) 
			{
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} 
			else 
			{
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		else 
		{
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$agents = $this->User->Agent->Person->find('list', array('fields'=>array('Person.id_person','Person.completename')));
		$this->set(compact('agents'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
