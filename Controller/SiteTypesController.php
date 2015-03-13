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
	
	public $paginate = array(
			//'fields' => array('Meeting.meeting_type'),
			'limit' => 10,
			'order'=> array(
					'SiteTypes.id_site_type' => 'desc'
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
		$this->SiteType->recursive = 0;
		$this->set('siteTypes', $this->Paginator->paginate());
	}
	
	public function index_service()
	{
		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$id_usuario = $this->Session->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
		$sitetype=$this->SiteType->find('all',array('conditions'=>array('SiteType.site_estado' => '1')));
		//$sitetype=$this->SiteType->find('all');
		$count=0;
		foreach ($sitetype as $key => $sitetype) {
			$data['rows'][$count]=array(
					'id'=>$sitetype['SiteType']['id_site_type'],
					't_sitio'=>$sitetype['SiteType']['site_type'],
					'estado_ts'=>$sitetype['SiteType']['site_estado'],
					'creation_date'=>$sitetype['SiteType']['creation_date'],
					'modification_date'=>$sitetype['SiteType']['modification_date'],
					'user_id'=>$sitetype['SiteType']['user_id'],
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
	
				$this->SiteType->create();
				$data=$this->request->data;
				$data['SiteType']['site_type'] = ucwords($data['SiteType']['site_type']);
				$data['SiteType']['creation_date']=date('Y-m-d H:i:s');
				$data['SiteType']['user_id']=$usuario;
								
				if ($this->SiteType->save($data)) {
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
				$this->Session->setFlash(__('The type site already exists , please check.'));
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
