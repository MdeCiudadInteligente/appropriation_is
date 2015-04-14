<?php
App::uses('AppController', 'Controller');
/**
 * Communes Controller
 *
 * @property Commune $Commune
 * @property PaginatorComponent $Paginator
 */
class CommunesController extends AppController {

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
					'Communes.id_commune' => 'desc'
			)
	);
	public function isAuthorized($user) {
		// Any registered user can access public functions
	
	if ((isset($user['permission_level']) && $user['permission_level'] == '1')||(isset($user['permission_level']) && $user['permission_level'] == '2')||(isset($user['permission_level']) && $user['permission_level'] == '3')||(isset($user['permission_level']) && $user['permission_level'] == '4')||(isset($user['permission_level']) && $user['permission_level'] == '5')) {
			return true;
		}	
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Commune->recursive = 0;
		$this->set('communes', $this->Paginator->paginate());
	}
	
	public function index_service()
	{
		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$id_usuario = $this->Session->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
		
		$commune=$this->Commune->find('all');
		$count=0;
		foreach ($commune as $key => $commune) {
			$data['rows'][$count]=array(
					'id'=>$commune['Commune']['id_commune'],
					'nombre_comuna'=>$commune['Commune']['commune_name'],
					'zone_id'=>$commune['Commune']['zone_id'],					
					'creation_date'=>$commune['Commune']['creation_date'],
					'modification_date'=>$commune['Commune']['modification_date'],
					'user_id'=>$commune['Commune']['user_id'],
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
		if (!$this->Commune->exists($id)) {
			throw new NotFoundException(__('Invalid commune'));
		}
		$options = array('conditions' => array('Commune.' . $this->Commune->primaryKey => $id));
		$this->set('commune', $this->Commune->find('first', $options));
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
			
			$name_comuna= $this->request->data['Commune']['commune_name'];
			$verificar_comuna=$this->Commune->query("select distinct commune_name from communes where commune_name = '$name_comuna'");
			$this->set('verificar_comuna',$verificar_comuna);
			
			if($verificar_comuna==Array( )){
			
				$this->Commune->create();
						$data=$this->request->data;
						$data['Commune']['commune_name'] = ucwords(($data['Commune']['commune_name']));
						$data['Commune']['creation_date']=date('Y-m-d H:i:s');
						$data['Commune']['user_id']=$usuario;
						
						if ($this->Commune->save($data)) {
							$this->Session->setFlash(__('The commune has been saved.'));
							return $this->redirect(array('action' => 'index'));
						}
						else
						{
							$this->Session->setFlash(__('The commune could not be deleted. Please, try again.'));
						}
				}
				else
				{
					$this->Session->setFlash(__('The community already exists , please check.'));
				}
			}
		$zones = $this->Commune->Zone->find('list');
		$this->set(compact('zones'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		
		if (!$this->Commune->exists($id)) 
		{
			throw new NotFoundException(__('Invalid commune'));
		}
		if ($this->request->is(array('post', 'put'))) {		

			
				$usuario = $this->Session->read('Auth.User.id_user');
				$this->set('usuario',$usuario);
					
				$name_comuna= $this->request->data['Commune']['commune_name'];
				$verificar_comuna=$this->Commune->query("select distinct commune_name from communes where commune_name = '$name_comuna'");
				$this->set('verificar_comuna',$verificar_comuna);
				
				if($verificar_comuna==Array( )){

			
					if ($this->Commune->save($this->request->data)) {
						$this->Session->setFlash(__('The commune has been saved.'));
						return $this->redirect(array('action' => 'index'));
					} else {
						$this->Session->setFlash(__('The commune could not be saved. Please, try again.'));
					}
				}
				
				else
				{
					$this->Session->setFlash(__('The community already exists , please check.'));
				}
		}					
		else 
		{
			$options = array('conditions' => array('Commune.' . $this->Commune->primaryKey => $id));
			$this->request->data = $this->Commune->find('first', $options);
		}
		$zones = $this->Commune->Zone->find('list');
		$this->set(compact('zones'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Commune->id = $id;
		if (!$this->Commune->exists()) {
			throw new NotFoundException(__('Invalid commune'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Commune->delete()) {
			$this->Session->setFlash(__('The commune has been deleted.'));
		} else {
			$this->Session->setFlash(__('The commune could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
