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
			$this->Site->create();
			if ($this->Site->save($this->request->data)) {
				$this->Session->setFlash(__('The site has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The site could not be saved. Please, try again.'));
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
			if ($this->Site->save($this->request->data)) {
				$this->Session->setFlash(__('The site has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The site could not be saved. Please, try again.'));
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
				
		)));

		
		if($sitio_id!=array()){
			$this->Session->setFlash(__('El sitio no se puede eliminar porque se encuentra asociado a una actividad.'));
			return $this->redirect(array('action' => 'index'));
				
		}

		$this->request->onlyAllow('post', 'delete');
		if ($this->Site->delete()) {
			$this->Session->setFlash(__('The site has been deleted.'));
		} else {
			$this->Session->setFlash(__('The site could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

}
