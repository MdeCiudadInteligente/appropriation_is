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

/**
 * index method
 *
 * @return void
 */
	/*
	
	 public function beforeFilter() {
		//parent::beforeFilter();
		// Allow users to register and logout.
		$this->Auth->allow('add', 'logout');
		//$this->Auth->autoRedirect=false;
		
 //si es super usuario permito todo 
   /*   $user = $this->Auth->user();
      if ($user['permission_level']=== '2'){
         $this->Auth->allow('*');
      }
      else  {//solo permito la vista del usuario comun por ahora
         $this->Auth->allow('view');
      }
       parent::beforeFilter();*/
	/*
	}*/
	
	public function isAuthorized($user) {
		// Any registered user can access public functions
	
	
		if ((isset($user['permission_level']) && $user['permission_level'] === '2')||(isset($user['permission_level']) && $user['permission_level'] === '1')||(isset($user['permission_level']) && $user['permission_level'] === '3')||(isset($user['permission_level']) && $user['permission_level'] === '4')) {
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
		
			$username= $this->request->data['User']['username'];
			$agent_id= $this->request->data['User']['agent_id'];
			
			$verificar_usuario=$this->User->query("select distinct username from users where username = '$username'");
			$this->set('verificar_usuario',$verificar_usuario);
			
			$verificar_agent=$this->User->query("select distinct agent_id from users where agent_id = '$agent_id'");
			$this->set('verificar_agent',$verificar_agent);
			
			if($verificar_agent==Array( ))
			{
				if($verificar_usuario==Array( )){
						
					$usuario = $this->Session->read('Auth.User.id_user');
					$this->set('usuario',$usuario);
					$horas_diferencia= -6;
					$tiempo=time() + ($horas_diferencia * 60 *60);
					list($Mili, $bot) = explode(" ", microtime());
					$DM=substr(strval($Mili),2,4);
					$fecha = date('Y-m-d H:i:s:'. $DM,$tiempo);
					$this->set('fecha',$fecha);
				
					$this->User->create();
					
					$this->User->set(array(
							'creation_date' => $fecha
					));
						
					$this->User->set(array(
							'user_id' => $usuario
					));
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
						$this->Session->setFlash(__('El nombre de usuario no est� disponible, por favor ingrese uno nuevo.'));
				}
			}
			else 
			{
				$this->Session->setFlash(__('El agente ya tiene usuario, por favor verificar.'));
			}		
			
		}
		//$agent = $this->User->Agent->find('list', array('fields'=>array('person_id')));
		//$agents = $this->User->Agent->Person->find('list', array('fields'=>array('Person.id_person','Person.completename')));
		//$agents=$this->User->Agent->Person->find('list', array('conditions'=>array('id_person'=>$agent),'fields'=>array('Person.completename','Agent.id_agent')));
		
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
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
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
