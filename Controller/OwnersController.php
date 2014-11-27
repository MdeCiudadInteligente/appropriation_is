<?php
App::uses('AppController', 'Controller');
/**
 * Owners Controller
 *
 * @property Owner $Owner
 * @property PaginatorComponent $Paginator
 */
class OwnersController extends AppController {

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
					'Owners.id_owner' => 'desc'
			)
	);
	public function isAuthorized($user) {
		// Any registered user can access public functions
	
	
		if ((isset($user['permission_level']) && $user['permission_level'] == '2')||(isset($user['permission_level']) && $user['permission_level'] == '1')||(isset($user['permission_level']) && $user['permission_level'] == '3')) {
			return true;
		}
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Owner->recursive = 0;
		$this->set('owners', $this->Paginator->paginate());
	}
	
	public function index_service()
	{
		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$id_usuario = $this->Session->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
	
		$owner=$this->Owner->find('all');
		$count=0;
		foreach ($owner as $key => $owner) {
			$data['rows'][$count]=array(
					'id'=>$owner['Owner']['id_owner'],
					'rol'=>$owner['Owner']['roll'],
					'site_id'=>$owner['Owner']['site_id'],
					'person_id'=>$owner['Owner']['person_id'],					
					'creation_date'=>$owner['Owner']['creation_date'],
					'modification_date'=>$owner['Owner']['modification_date'],
					'user_id'=>$owner['Owner']['user_id'],
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
		if (!$this->Owner->exists($id)) {
			throw new NotFoundException(__('Invalid owner'));
		}
		$options = array('conditions' => array('Owner.' . $this->Owner->primaryKey => $id));
		$this->set('owner', $this->Owner->find('first', $options));
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
			
			$this->Owner->create();
			$data=$this->request->data;
			$data['Owner']['creation_date']=date('Y-m-d H:i:s');
			$data['Owner']['user_id']=$usuario;
							
			if ($this->Owner->save($data)) {
					$this->Session->setFlash(__('El encargado se ha guardado.'));
					return $this->redirect(array('action' => 'index'));
			}
			else
			{
				$this->Session->setFlash(__('El encargado no pudo ser salvado.Por favor ,vuelva a intentarlo.'));
			}
		}
		$sites = $this->Owner->Site->find('list');
		$people = $this->Owner->Person->find('list', array('fields'=>array('Person.id_person','Person.completename'),'order' => array('Person.completename' => 'ASC')));
		//$people = $this->Owner->Person->find('list');
		$this->set(compact('sites', 'people'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Owner->exists($id)) {
			throw new NotFoundException(__('Invalid owner'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Owner->save($this->request->data)) {
				$this->Session->setFlash(__('The owner has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The owner could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Owner.' . $this->Owner->primaryKey => $id));
			$this->request->data = $this->Owner->find('first', $options);
		}
		$sites = $this->Owner->Site->find('list');
		$people = $this->Owner->Person->find('list');
		$this->set(compact('sites', 'people'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Owner->id = $id;
		if (!$this->Owner->exists()) {
			throw new NotFoundException(__('Invalid owner'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Owner->delete()) {
			$this->Session->setFlash(__('The owner has been deleted.'));
		} else {
			$this->Session->setFlash(__('The owner could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
