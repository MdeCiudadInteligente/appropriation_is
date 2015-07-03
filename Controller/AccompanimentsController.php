<?php
App::uses('AppController', 'Controller');
/**
 * Accompaniments Controller
 *
 * @property Accompaniment $Accompaniment
 * @property PaginatorComponent $Paginator
 */
class AccompanimentsController extends AppController {
	var $uses = array('Person','Site','Accompaniment','Neighborhood','SiteType','User','Agent','Commune');
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
            'Accompaniment.id_accompaniment' => 'desc'
       )
	);

/**
 * index method
 *
 * @return void
 */

	public function isAuthorized($user) {
		// Any registered user can access public functions
	
	
	if ((isset($user['permission_level']) && $user['permission_level'] == '1')||(isset($user['permission_level']) && $user['permission_level'] == '2')||(isset($user['permission_level']) && $user['permission_level'] == '3')||(isset($user['permission_level']) && $user['permission_level'] == '4')||(isset($user['permission_level']) && $user['permission_level'] == '5')) {
			return true;
		}
	}
			
	
		// Default deny
		//return false;

	
	public function index() {
		
		$id_usuario = $this->Session->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
		//debug($id_usuario);
		
		/*$usuario_level= $this->Session->read('Auth.User.permission_level');
		 $this->set('usuario_level',$usuario_level);*/
		
		//variable designada para Agents...
		$accompaniment=$this->Accompaniment->find('all');
		$this->set('accompaniments', $accompaniment);		//$this->Meeting->recursive = 0;
		
		//$this->Accompaniment->recursive = 0;
		//$this->set('accompaniments', $this->Paginator->paginate('Accompaniment'));
		if ($this->request->is('post')) {
			return $this->redirect(array('action' => 'download'));
		}
		
		$this->Paginator->settings = $this->paginate;
		$this->set('accompaniments', $this->Paginator->paginate('Accompaniment'));	
		$this->set('totala',$this->Accompaniment->find('count'));
	}
	
	public function index_service()
	{
		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$id_usuario = $this->Session->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
		$accompaniment=$this->Accompaniment->find('all');
		$count=0;
		foreach ($accompaniment as $key => $accompaniment) {
			$data['rows'][$count]=array(
					'id'=>$accompaniment['Accompaniment']['id_accompaniment'],
					'sitio'=>$accompaniment['Site']['site_name'],
					'f_reunion'=>$accompaniment['Accompaniment']['accompaniment_date'],
					//'tipo'=>$accompaniment['Accompaniment']['accompaniment_type'],
					'tipo'=>$accompaniment['AccType']['name'],
					'titulo'=>$accompaniment['Accompaniment']['accompaniment_title'],
					'descripcion'=>$accompaniment['Accompaniment']['accompaniment_description'],
					'num_participantes'=>$accompaniment['Accompaniment']['participant_number'],										
					'creation_date'=>$accompaniment['Accompaniment']['creation_date'],
					'modification_date'=>$accompaniment['Accompaniment']['modification_date'],
					'user_id'=>$accompaniment['Accompaniment']['user_id'],
					'username'=>$accompaniment['User']['username']
			);
			$count++;
		}
		$this->set(compact('data'));
		$this->set('_serialize', 'data'); // Let the JsonView class know what variable to use
	}
	
	/*public function download()
	{
		//$this->Accompaniment->recursive = 0;
		$this->set('accompaniments', $this->Accompaniment->find('all'));
		$this->set('sites',$this->Site->find('all'));
		$this->set('agents',$this->Agent->find('all'));
		$this->set('users',$this->User->find('all'));
		$this->set('neighborhoods',$this->Neighborhood->find('all'));
		$this->set('site_types',$this->SiteType->find('all'));
		$this->set('people',$this->Person->find('all'));
		$this->set('communes',$this->Commune->find('all'));
	
		$this->layout = null;
		//$this->autoLayout = false;
		//Configure::write('debug', '0');
	}*/
	
	public function download()
	{
		$db = $this->Accompaniment->getDataSource();
		$accompaniments=$db->fetchAll("SELECT 
    	t1.accompaniment_date AS Fecha,
    	'Acompañamiento' AS 'Tipo_actividad',
    	t5.name AS 'Tipo_acompanamiento',
    	t1.accompaniment_title AS 'Titulo',
	    t1.accompaniment_description AS 'Descripcion',
	    t1.participant_number AS 'Numero_Participantes',
	    t2.site_name AS Sitio,
	    t3.neighborhood_name AS Barrio,
	    t4.commune_name AS Comuna,
	    t1.accompaniment_adjunct AS 'Adjunto1',
	    t1.accompaniment_adjunct1 AS 'Adjunto2',
	    t1.accompaniment_adjunct2 AS 'Adjunto3'
	    FROM
	    accompaniments t1,
	    sites t2,
	    neighborhoods t3,
	    communes t4,
	    acc_types t5
	    
	    WHERE
	    t1.site_id = t2.id_site
		AND t2.neighborhood_id = t3.id_neighborhood
		AND t3.commune_id = t4.id_commune
	    AND t1.accompaniment_type_id = t5.id
	    
	    ORDER BY 
		t1.accompaniment_date,t5.name");
		$this->request->data["result"]=$accompaniments;
		
		$this->layout = null;
		//$this->autoLayout = false;
		//Configure::write('debug', '0');
	
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Accompaniment->exists($id)) {
			throw new NotFoundException(__('Invalid accompaniment'));
		}
		$options = array('conditions' => array('Accompaniment.' . $this->Accompaniment->primaryKey => $id));
		$this->set('accompaniment', $this->Accompaniment->find('first', $options));
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
			
			$this->Accompaniment->create();
			$data=$this->request->data;
			if($data!=''){
			$data['Accompaniment']['creation_date']=date('Y-m-d H:i:s');
			$data['Accompaniment']['user_id']=$usuario;
			}
			else{
			
				$this->Session->setFlash(__('Los adjuntos no se han podido cargar correctamente'));
			}
			
			if ($this->Accompaniment->save($data)) {
					$this->Session->setFlash(__('The accompaniment has been saved.'));
					return $this->redirect(array('action' => 'index'));
			}
			else
				{
					$this->Session->setFlash(__('The accompaniment could not be saved. Please, try again.'));
				}
		}
		$sites = $this->Accompaniment->Site->find('list', array('order'=>array('Site.site_name ASC')));
		$AccTypes = $this->Accompaniment->AccType->find('list',array('order' => array('AccType.name' => 'ASC')));
		$this->set(compact('sites','AccTypes'));

	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Accompaniment->exists($id)) {
			throw new NotFoundException(__('Invalid accompaniment'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Accompaniment->save($this->request->data)) {
				$this->Session->setFlash(__('The accompaniment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The accompaniment could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Accompaniment.' . $this->Accompaniment->primaryKey => $id));
			$this->request->data = $this->Accompaniment->find('first', $options);
		}
		$sites = $this->Accompaniment->Site->find('list');
		$accTypes = $this->Accompaniment->AccType->find('list',array('order' => array('AccType.name ASC')));
		$options = array('conditions' => array('Accompaniment.' . $this->Accompaniment->primaryKey => $id));
		$this->set('accompaniment', $this->Accompaniment->find('first', $options));
		$this->set(compact('sites','accTypes'));
	}

	/**
	 * delete files one by one
	 *
	 * @return void
	 */
	public function delete_attachment($idattach=null,$druta = null) {
		$this->set('druta',$druta);
	
		$deletefile="update accompaniments SET accompaniment_adjunct='' Where id_accompaniment ='$idattach'";
		$deletefilefinal=$this->Accompaniment->query($deletefile);
		$this->set('deletefilefinal',$deletefilefinal);
	
		unlink('../webroot/uploads/accompaniment/accompaniment_adjunct/'.$druta);
	
		return $this->redirect(array('action' => 'edit',$idattach));
			
	}
	
	public function delete_attachment1($idattach=null,$druta1 = null) {
		$this->set('druta1',$druta1);
	
		$deletefile="update accompaniments SET accompaniment_adjunct1='' Where id_accompaniment ='$idattach'";
		$deletefilefinal=$this->Accompaniment->query($deletefile);
		$this->set('deletefilefinal',$deletefilefinal);
		unlink('../webroot/uploads/accompaniment/accompaniment_adjunct1/'.$druta1);
	
		return $this->redirect(array('action' => 'edit',$idattach));
			
	}
	
	public function delete_attachment2($idattach=null,$druta2 = null) {
		$this->set('druta2',$druta2);
	
		$deletefile="update accompaniments SET accompaniment_adjunct2='' Where id_accompaniment ='$idattach'";
		$deletefilefinal=$this->Accompaniment->query($deletefile);
		$this->set('deletefilefinal',$deletefilefinal);
		unlink('../webroot/uploads/accompaniment/accompaniment_adjunct2/'.$druta2);
	
		return $this->redirect(array('action' => 'edit',$idattach));
			
	}
/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Accompaniment->id = $id;
		if (!$this->Accompaniment->exists()) {
			throw new NotFoundException(__('Invalid accompaniment'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Accompaniment->delete()) {
			$this->Session->setFlash(__('The accompaniment has been deleted.'));
		} else {
			$this->Session->setFlash(__('The accompaniment could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
