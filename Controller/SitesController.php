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
			
			$name_site= $this->request->data['Site']['site_name'];
			$verificar_site=$this->Site->query("select distinct site_name from sites where site_name = '$name_site'");
			$this->set('verificar_site',$verificar_site);
				
			if($verificar_site==Array( )){
			
				$horas_diferencia= -6;
				$tiempo=time() + ($horas_diferencia * 60 *60);
				list($Mili, $bot) = explode(" ", microtime());
				$DM=substr(strval($Mili),2,4);
				$fecha = date('Y-m-d H:i:s:'. $DM,$tiempo);
				$this->set('fecha',$fecha);
				
				$this->Site->create();
				
				$this->Site->set(array(
						'creation_date' => $fecha
				));
				$this->Site->set(array(
						'user_id' => $usuario
				));
				
				if ($this->Site->save($this->request->data)) 
				{
					$this->Session->setFlash(__('The site has been saved.'));
					return $this->redirect(array('action' => 'index'));
				} 
				else 
				{
					debug($this->validationErrors); die();
					$this->Session->setFlash(__('The site could not be saved. Please, try again.'));
				}
			}
			else
			{
				$this->Session->setFlash(__('El sitio ya existe, por favor verifique.'));
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
				$this->Session->setFlash(__('El sitio ya existe, por favor verifique.'));
			}
		} else {
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
			$this->Session->setFlash(__('El sitio no se puede eliminar porque se encuentra asociado a una actividad.'));
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

		$person=$this->Site->find('list',array('fields'=>array('Site.id_site','Site.site_name','Site.site_address'),'order' => array('Site.site_name' => 'ASC'),'conditions' => $condition));


		foreach ($person as $dir => $value) {
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
