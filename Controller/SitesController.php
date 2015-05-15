<?php
App::uses('AppController', 'Controller');
/**
 * Sites Controller
 *
 * @property Site $Site
 * @property PaginatorComponent $Paginator
 */
class SitesController extends AppController {

	var $helpers = array('Html','Form','Csv','Js');
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
		$this->Site->recursive = 0;
		$this->Paginator->settings=array('order' => array( 'Site.site_name' => 'asc'));
		$this->set('sites', $this->Paginator->paginate());
		
		$this->Site->recursive = 0;
		$this->set('sites', $this->Paginator->paginate('Site'));
		if ($this->request->is('post')) {
			return $this->redirect(array('action' => 'download'));
		}
		$this->set('totals',$this->Site->find('count'));
		//array('order'=>array('Site.site_name'=>'asc'))
	}
	
	public function index_service()
	{
		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$id_usuario = $this->Session->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
		$site=$this->Site->find('all');
		//$site=$this->Site->find('all');
		$count=0;
		foreach ($site as $key => $site) {
			$data['rows'][$count]=array(
					'id'=>$site['Site']['id_site'],
					'nsitio'=>$site['Site']['site_name'],
					'telsitio'=>$site['Site']['site_phone'],
					'dir_sitio'=>$site['Site']['site_address'],
					'cor_sitio'=>$site['Site']['site_mail'],
					'bar_sitio'=>$site['Neighborhood']['neighborhood_name'],
					'tsitio'=>$site['SiteType']['site_type'],
					'estado_sitio'=>$site['Site']['syte_estado'],
					'creation_date'=>$site['Site']['creation_date'],
					'modification_date'=>$site['Site']['modification_date'],
					'user_id'=>$site['Site']['user_id'],
			);
			$count++;
		}
		$this->set(compact('data'));
		$this->set('_serialize', 'data'); // Let the JsonView class know what variable to use
	}
	
	
	//reporte de sitios...
	public function download()
	{
		$this->Site->recursive = 2;
	
		$this->set('sites', $this->Site->find('all'));
		///$this->set('workshopSessions',$this->WorkshopSession->find('all'));
		$this->layout = null;
		//$this->autoLayout = false;
		//Configure::write('debug', '0');
	}
	//fin de reportes...

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Site->exists($id)) {
			throw new NotFoundException(__('Invalid site'));
		}
		$options = array('conditions' => array('Site.' . $this->Site->primaryKey => $id));
		$this->set('site', $this->Site->find('first', $options));
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
					
				$this->Site->create();
				$data=$this->request->data;						
				$data['Site']['site_name'] = ucwords($data['Site']['site_name']);
				$data['Site']['creation_date']=date('Y-m-d H:i:s');
				$data['Site']['user_id']=$usuario;
								
				if ($this->Site->save($data)) {
						$this->Session->setFlash(__('The site has been saved.'));
						return $this->redirect(array('action' => 'index'));
				}
				else
				{
					$this->Session->setFlash(__('The site could not be saved . Please try again.'));
				}
		}
		$neighborhoods = $this->Site->Neighborhood->find('list',array('order' => array('Neighborhood.neighborhood_name' => 'ASC')));
		$siteTypes = $this->Site->SiteType->find('list',array('order' => array('SiteType.site_type' => 'ASC')));
		$this->set(compact('neighborhoods', 'siteTypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Site->exists($id)) {
			throw new NotFoundException(__('Invalid site'));
		}
		if ($this->request->is(array('post', 'put'))) {			
			$usuario = $this->Session->read('Auth.User.id_user');
			$this->set('usuario',$usuario);
				
			$name_site= $this->request->data['Site']['site_name'];
			$verificar_site=$this->Site->query("select distinct site_name from sites where site_name = '$name_site'");
			$this->set('verificar_site',$verificar_site);
				
			if($verificar_site==Array( )){
					
					
				if ($this->Site->save($this->request->data)) {
					$this->Session->setFlash(__('The site has been saved.'));
					return $this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The site could not be saved. Please, try again.'));
				}
			}
			else
			{
				$this->Session->setFlash(__('The site already exists , please check.'));
			}
		}else {
			$options = array('conditions' => array('Site.' . $this->Site->primaryKey => $id));
			$this->request->data = $this->Site->find('first', $options);
		}
		$neighborhoods = $this->Site->Neighborhood->find('list');
		$siteTypes = $this->Site->SiteType->find('list');
		$this->set(compact('neighborhoods', 'siteTypes'));
	}


/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Site->id = $id;
		if (!$this->Site->exists()) {
			throw new NotFoundException(__('Invalid site'));
		}

		$this->request->onlyAllow('post', 'delete');

	    if ($this->request->is('get')) {
	        throw new MethodNotAllowedException();
	    }

		$sitio_id = $this->Site->find('first', array('joins' => array(
				array(
						'table' => 'accompaniments',
						'alias' => 't1',
						'type' => 'inner',
						'foreignKey' => false,
						'conditions'=> array('t1.site_id = Site.id_site')
				),
				array(
						'table' => 'meetings',
						'alias' => 't2',
						'type' => 'inner',
						'foreignKey' => false,
						'conditions'=> array('t2.site_id = Site.id_site')
				),				
				array(
						'table' => 'divulgations',
						'alias' => 't3',
						'type' => 'inner',
						'foreignKey' => false,
						'conditions'=> array('t3.site_id = Site.id_site')
				)
				
		),'conditions' => array('Site.id_site'=> $id)));

		debug($this->Site->primaryKey);

		if($sitio_id!=array()){
			$this->Session->setFlash(__('The site can not be deleted because it is associated with an activity.'));
			return $this->redirect(array('action' => 'index'));
				
		}
		
		if ($this->Site->delete()) {
			$this->Session->setFlash(__('The site has been deleted.'));
		} else {
			$this->Session->setFlash(__('The site could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


/**
 * Json get Site method
 *
 * @param string $query
 * @return $array
 */
	public function getSite() {
	    $this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$queryString=$_GET['q'];
		$condition=array('OR' => array(
				    array('Site.site_name LIKE' => '%'.$queryString.'%'),
				    array('Site.site_address LIKE' => '%'.$queryString.'%')
		));

		$site=$this->Site->find('list',array('fields'=>array('Site.id_site','Site.site_name','Site.site_address'),'order' => array('Site.site_name' => 'ASC'),'conditions' => $condition));
		foreach ($site as $dir => $value) {
				$json_data = array();
				$json_data['direccion']=$dir;
				$array_keys=array_keys($value);
				$json_data['id_site']=$array_keys[0];
				$json_data['nombre']=$value[$array_keys[0]];
				$data[]=$json_data;
		}	
		$this->set(compact('data')); // Pass $data to the view
		$this->set('_serialize', 'data'); // Let the JsonView class know what variable to use
	}



}
