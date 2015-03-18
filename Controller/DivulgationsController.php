<?php
App::uses('AppController', 'Controller');
/**
 * Divulgations Controller
 *
 * @property Divulgation $Divulgation
 * @property PaginatorComponent $Paginator
 */
class DivulgationsController extends AppController {

	var $uses = array('Person','Divulgation','Site','User','Agent','Neighborhood','SiteType','Commune','Thematic');
	var $helpers = array('Html','Form','Csv','Js');
	var $codeFirst='SE';
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
            'Divulgation.id_divulgation' => 'desc'
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
		//variable designada para Agents...
		$divulgation=$this->Divulgation->find('all');
		$this->set('divulgations', $divulgation);
		
		//$this->Divulgation->recursive = 0;
		//$this->set('divulgations', $this->Paginator->paginate('Divulgation'));
		if ($this->request->is('post')) {
			return $this->redirect(array('action' => 'download'));
		}
		//$this->Accompaniment->recursive = 0;
	   	$this->Paginator->settings = $this->paginate;
		$this->set('divulgations', $this->Paginator->paginate('Divulgation'));
		$this->set('totald',$this->Divulgation->find('count'));
	}
	
	public function index_service()
	{
		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$id_usuario = $this->Session->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
		$divulgation=$this->Divulgation->find('all');
		$count=0;
		foreach ($divulgation as $key => $divulgation) {
			$data['rows'][$count]=array(
					'id'=>$divulgation['Divulgation']['id_divulgation'],
					'sitio'=>$divulgation['Site']['site_name'],
					'f_divulgacion'=>$divulgation['Divulgation']['divulgation_date'],
					//'tipo'=>$divulgation['Divulgation']['divulgation_type'],
					'titulo'=>$divulgation['Divulgation']['divulgation_name'],
					'tipodiv'=>$divulgation['Divtype']['name'],
					'descripcion'=>$divulgation['Divulgation']['divulgation_description'],
					'tipopob'=>$divulgation['PopulationType']['name'],
					'nparticipantes'=>$divulgation['Divulgation']['participant_number'],
					'lactividad'=>$divulgation['Divulgation']['activity_place'],
					'creation_date'=>$divulgation['Divulgation']['creation_date'],
					'modification_date'=>$divulgation['Divulgation']['modification_date'],
					'user_id'=>$divulgation['Divulgation']['user_id'],
			);
			$count++;
		}
		$this->set(compact('data'));
		$this->set('_serialize', 'data'); // Let the JsonView class know what variable to use
	}
	
	
	public function download()
	{
		$this->Divulgation->recursive = 0;
		$this->set('divulgations', $this->Divulgation->find('all'));
		$this->set('sites',$this->Site->find('all'));
		$this->set('agents',$this->Agent->find('all'));
		$this->set('users',$this->User->find('all'));
		$this->set('people',$this->Person->find('all'));
		$this->set('neighborhoods',$this->Neighborhood->find('all'));
		$this->set('site_types',$this->SiteType->find('all'));
		$this->set('communes',$this->Commune->find('all'));
	
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
		if (!$this->Divulgation->exists($id)) {
			throw new NotFoundException(__('Invalid divulgation'));
		}
		$options = array('conditions' => array('Divulgation.' . $this->Divulgation->primaryKey => $id));
		$this->set('divulgation', $this->Divulgation->find('first', $options));
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
			
				$this->Divulgation->create();
				$data=$this->request->data;

				$args=array(
							'conditions' => array('Thematic.id' => $data['Thematic']['Thematic']),
						    'recursive' => -1,
						    'fields' => array('Thematic.prefix'),
						    'limit'=>1
					  );

				$temas=$this->Thematic->find('list',$args);
				$divulgation_count=$this->Divulgation->find('count');
				$divulgation_count=$divulgation_count+1;
				$theme_prefixes=implode($temas,'-');
				$code=$this->codeFirst.$theme_prefixes.date('Y').'-'.$divulgation_count;

				if($data!=''){
				$data['Divulgation']['creation_date']=date('Y-m-d H:i:s');
				$data['Divulgation']['user_id']=$usuario;
				$data['Divulgation']['divulgation_name']=$code;
				}		
				else{
					$this->Session->setFlash(__('Los adjuntos no se han podido cargar correctamente'));
				}
				


				if ($this->Divulgation->save($data)) {
						$this->Session->setFlash(__('The divulgation has been saved.'));
						return $this->redirect(array('action' => 'index'));
				}
				else
				{
					$this->Session->setFlash(__('The divulgation could not be saved. Please, try again.'));
				}
		}
				
		$sites = $this->Divulgation->Site->find('list',array('order' => array('Site.site_name ASC')));
		$populationTypes = $this->Divulgation->PopulationType->find('list',array('order' => array('PopulationType.name' => 'ASC')));
		$DivTypes = $this->Divulgation->Divtype->find('list',array('order' => array('Divtype.name' => 'ASC')));
		$thematicstypes = $this->Divulgation->Thematic->find('list',array('order' => array('Thematic.name' => 'ASC')));
	
		$this->set(compact('sites', 'populationTypes','DivTypes','thematicstypes'));
		
		
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Divulgation->exists($id)) {
			throw new NotFoundException(__('Invalid divulgation'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Divulgation->save($this->request->data)) {
				$this->Session->setFlash(__('The divulgation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The divulgation could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Divulgation.' . $this->Divulgation->primaryKey => $id));
			$this->request->data = $this->Divulgation->find('first', $options);
		}
		$sites = $this->Divulgation->Site->find('list',array('order' => array('Site.site_name ASC')));
		$populationTypes = $this->Divulgation->PopulationType->find('list',array('order' => array('PopulationType.name' => 'ASC')));
		$DivTypes = $this->Divulgation->Divtype->find('list',array('order' => array('Divtype.name' => 'ASC')));
		$thematicstypes = $this->Divulgation->Thematic->find('list',array('order' => array('Thematic.name' => 'ASC')));
		$this->set(compact('sites', 'populationTypes','DivTypes','thematicstypes'));
		$options = array('conditions' => array('Divulgation.' . $this->Divulgation->primaryKey => $id));
		$this->set('divulgation', $this->Divulgation->find('first', $options));
	}

	/**
	 * delete files one by one
	 *
	 * @return void
	 */
	public function delete_attachment($idattach=null,$druta = null) {
		$this->set('druta',$druta);
		
		$deletefile="update divulgations SET divulgation_adjunct='' Where id_divulgation ='$idattach'";
		$deletefilefinal=$this->Divulgation->query($deletefile);
		$this->set('deletefilefinal',$deletefilefinal);
		
		unlink('../webroot/uploads/divulgation/divulgation_adjunct/'.$druta);
		
		return $this->redirect(array('action' => 'edit',$idattach));
		 
	}
	
	public function delete_attachment1($idattach=null,$druta1 = null) {
		$this->set('druta1',$druta1);

		$deletefile="update divulgations SET divulgation_adjunct1='' Where id_divulgation ='$idattach'";
		$deletefilefinal=$this->Divulgation->query($deletefile);
		$this->set('deletefilefinal',$deletefilefinal);
		unlink('../webroot/uploads/divulgation/divulgation_adjunct1/'.$druta1);
	
		return $this->redirect(array('action' => 'edit',$idattach));
			
	}
	
	public function delete_attachment2($idattach=null,$druta2 = null) {
		$this->set('druta2',$druta2);
		
		$deletefile="update divulgations SET divulgation_adjunct2='' Where id_divulgation ='$idattach'";
		$deletefilefinal=$this->Divulgation->query($deletefile);
		$this->set('deletefilefinal',$deletefilefinal);
		unlink('../webroot/uploads/divulgation/divulgation_adjunct2/'.$druta2);
	
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
		$this->Divulgation->id = $id;
		if (!$this->Divulgation->exists()) {
			throw new NotFoundException(__('Invalid divulgation'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Divulgation->delete()) {
			$this->Session->setFlash(__('The divulgation has been deleted.'));
		} else {
			$this->Session->setFlash(__('The divulgation could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
