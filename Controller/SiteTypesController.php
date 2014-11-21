<?php
App::uses('AppController', 'Controller');
/**
 * SiteTypes Controller
 *
 * @property SiteType $SiteType
 * @property PaginatorComponent $Paginator
 */
class SiteTypesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	
	public function isAuthorized($user) {
		// Any registered user can access public functions
	
	
		if ((isset($user['permission_level']) && $user['permission_level'] === '2')||(isset($user['permission_level']) && $user['permission_level'] === '1')||(isset($user['permission_level']) && $user['permission_level'] === '3')) {
			return true;
		}
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SiteType->recursive = 0;
		$this->set('siteTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SiteType->exists($id)) {
			throw new NotFoundException(__('Invalid site type'));
		}
		$options = array('conditions' => array('SiteType.' . $this->SiteType->primaryKey => $id));
		$this->set('siteType', $this->SiteType->find('first', $options));
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
			
			$name_sitetype= $this->request->data['SiteType']['site_type'];
			$verificar_sitetype=$this->SiteType->query("select distinct site_type from site_types where site_type = '$name_sitetype'");
			$this->set('verificar_sitetype',$verificar_sitetype);
				
			if($verificar_sitetype==Array( )){			
	
				$horas_diferencia= -6;
				$tiempo=time() + ($horas_diferencia * 60 *60);
				list($Mili, $bot) = explode(" ", microtime());
				$DM=substr(strval($Mili),2,4);
				$fecha = date('Y-m-d H:i:s:'. $DM,$tiempo);
				$this->set('fecha',$fecha);
				
				$this->SiteType->create();
				
				$this->SiteType->set(array(
						'creation_date' => $fecha
				));
				$this->SiteType->set(array(
						'user_id' => $usuario
				));
				
				if ($this->SiteType->save($this->request->data)) 
				{
					$this->Session->setFlash(__('The site type has been saved.'));
					return $this->redirect(array('action' => 'index'));
				} 
				else 
				{
					$this->Session->setFlash(__('The site type could not be saved. Please, try again.'));
				}
			}
			else
			{
				$this->Session->setFlash(__('El tipo de sitio ya existe, por favor verifique.'));
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
		if (!$this->SiteType->exists($id)) {
			throw new NotFoundException(__('Invalid site type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			
			$name_sitetype= $this->request->data['SiteType']['site_type'];
			$verificar_sitetype=$this->SiteType->query("select distinct site_type from site_types where site_type = '$name_sitetype'");
			$this->set('verificar_sitetype',$verificar_sitetype);
			
			if($verificar_sitetype==Array( )){
				if ($this->SiteType->save($this->request->data)) 
				{
					$this->Session->setFlash(__('The site type has been saved.'));
					return $this->redirect(array('action' => 'index'));
				} 
				else 
				{
					$this->Session->setFlash(__('The site type could not be saved. Please, try again.'));
				}
				
			}
			else
			{
				$this->Session->setFlash(__('El tipo de sitio ya existe, por favor verifique.'));
			}
		}
		else 
		{
			$options = array('conditions' => array('SiteType.' . $this->SiteType->primaryKey => $id));
			$this->request->data = $this->SiteType->find('first', $options);
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
		$this->SiteType->id = $id;
		if (!$this->SiteType->exists()) {
			throw new NotFoundException(__('Invalid site type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SiteType->delete()) {
			$this->Session->setFlash(__('The site type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The site type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
