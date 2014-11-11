<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

var $uses = array('Person','Agent','Users');
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
		/*else {
			if($this->Auth->user('id_user')){
			$this->redirect($this->Auth->redirect());	
			}
		}*/
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
			$verificar_usuario=$this->User->query("select distinct username from users where username = '$username'");
			$this->set('verificar_usuario',$verificar_usuario);
			if($verificar_usuario==Array( )){	
						
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		else {
			$this->Session->setFlash(__('El nombre de usuario no est� disponible, por favor ingrese uno nuevo.'));
		}		
		}
		//$agent = $this->User->Agent->find('list', array('fields'=>array('person_id')));
		//$agents = $this->User->Agent->Person->find('list', array('fields'=>array('Person.id_person','Person.completename')));
		//$agents=$this->User->Agent->Person->find('list', array('conditions'=>array('id_person'=>$agent),'fields'=>array('Person.completename','Agent.id_agent')));
		
<<<<<<< HEAD
		$agents = $this->Agent->find('list', array('joins' => array(
=======
		$agents = $this->User->Agent->find('list', array('joins' => array(
>>>>>>> dev
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
