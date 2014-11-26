<?php
App::uses('AppController', 'Controller');
/**
 * Zones Controller
 *
 * @property Zone $Zone
 * @property PaginatorComponent $Paginator
 */
class ZonesController extends AppController {

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
					'Zones.id_zone' => 'desc'
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
		$this->Zone->recursive = 0;
		$this->set('zones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Zone->exists($id)) {
			throw new NotFoundException(__('Invalid zone'));
		}
		$options = array('conditions' => array('Zone.' . $this->Zone->primaryKey => $id));
		$this->set('zone', $this->Zone->find('first', $options));
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
			
			$name_zone= $this->request->data['Zone']['zone_name'];
			$verificar_zone=$this->Zone->query("select distinct zone_name from zones where zone_name = '$name_zone'");
			$this->set('verificar_zone',$verificar_zone);
			
			if($verificar_zone==Array( )){
			
				$this->Zone->create();
				$data=$this->request->data;
				$data['Zone']['creation_date']=date('Y-m-d H:i:s');
				$data['Zone']['user_id']=$usuario;
								
				if ($this->Zone->save($data)) {
						$this->Session->setFlash(__('La zona se ha guardado.'));
						return $this->redirect(array('action' => 'index'));
				}
				else
				{
					$this->Session->setFlash(__('La zona no pudo ser salvado.Por favor ,vuelva a intentarlo.'));
				}
			}
			else{
				$this->Session->setFlash(__('La Zona ya existe, por favor verificar.'));
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
		if (!$this->Zone->exists($id)) {
			throw new NotFoundException(__('Invalid zone'));
		}
		
		if ($this->request->is(array('post', 'put')))
		{			
			$name_zone= $this->request->data['Zone']['zone_name'];
			$verificar_zone=$this->Zone->query("select distinct zone_name from zones where zone_name = '$name_zone'");
			$this->set('verificar_zone',$verificar_zone);
			if($verificar_zone==Array( )){
					
				if ($this->Zone->save($this->request->data)) 
				{
					$this->Session->setFlash(__('The zone has been saved.'));
					return $this->redirect(array('action' => 'index'));
				} 
				else 
				{
					$this->Session->setFlash(__('The zone could not be saved. Please, try again.'));
				}
			}
			else
			{
					$this->Session->setFlash(__('La Zona ya existe, por favor verificar.'));
			}
		}
		else 
		{
			$options = array('conditions' => array('Zone.' . $this->Zone->primaryKey => $id));
			$this->request->data = $this->Zone->find('first', $options);
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
		$this->Zone->id = $id;
		if (!$this->Zone->exists()) {
			throw new NotFoundException(__('Invalid zone'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Zone->delete()) {
			$this->Session->setFlash(__('The zone has been deleted.'));
		} else {
			$this->Session->setFlash(__('The zone could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
