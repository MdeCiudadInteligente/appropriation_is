<?php
App::uses('AppController', 'Controller');
/**
 * Forallies Controller
 *
 * @property Forally $Forally
 * @property PaginatorComponent $Paginator
 */
class ForalliesController extends AppController {

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
	public function index() {
		$this->Forally->recursive = 0;
		$this->set('forallies', $this->Paginator->paginate());
	}
	
	public function index_service()
	{
		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$id_usuario = $this->Session->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
		$site=$this->Site->find('all',array('conditions'=>array('Site.syte_estado' => '1')));
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

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Forally->exists($id)) {
			throw new NotFoundException(__('Invalid forally'));
		}
		$options = array('conditions' => array('Forally.' . $this->Forally->primaryKey => $id));
		$this->set('forally', $this->Forally->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Forally->create();
			if ($this->Forally->save($this->request->data)) {
				$this->Session->setFlash(__('The forally has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The forally could not be saved. Please, try again.'));
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
		if (!$this->Forally->exists($id)) {
			throw new NotFoundException(__('Invalid forally'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Forally->save($this->request->data)) {
				$this->Session->setFlash(__('The forally has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The forally could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Forally.' . $this->Forally->primaryKey => $id));
			$this->request->data = $this->Forally->find('first', $options);
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
		$this->Forally->id = $id;
		if (!$this->Forally->exists()) {
			throw new NotFoundException(__('Invalid forally'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Forally->delete()) {
			$this->Session->setFlash(__('The forally has been deleted.'));
		} else {
			$this->Session->setFlash(__('The forally could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
