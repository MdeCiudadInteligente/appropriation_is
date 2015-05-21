<?php
App::uses('AppController', 'Controller');
/**
 * PerPeopleTypes Controller
 *
 * @property PerPeopleType $PerPeopleType
 * @property PaginatorComponent $Paginator
 */
class PerPeopleTypesController extends AppController {
	var $uses = array('Person','PerPeopleType');
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
		$this->PerPeopleType->recursive = 0;
		$this->set('perPeopleTypes', $this->Paginator->paginate());
	}


	public function isAuthorized($user) {
		// Any registered user can access public functions
		
		if ((isset($user['permission_level']) && $user['permission_level'] == '1')||(isset($user['permission_level']) && $user['permission_level'] == '2')||(isset($user['permission_level']) && $user['permission_level'] == '3')||(isset($user['permission_level']) && $user['permission_level'] == '4')||(isset($user['permission_level']) && $user['permission_level'] == '5')) {
			return true;
		}	
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PerPeopleType->exists($id)) {
			throw new NotFoundException(__('Invalid people type'));
		}
		$options = array('conditions' => array('PerPeopleType.' . $this->PerPeopleType->primaryKey => $id));
		$this->set('perPeopleType', $this->PerPeopleType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($people_id = null, $type_people=null, $usuario=null) {
		//if ($this->request->is('post')) {
		    	$this->PerPeopleType->create();
     			$data['PerPeopleType']['person_id']=$people_id;
	    		$data['PerPeopleType']['per_type_id']=$type_people;
	    		$data['PerPeopleType']['creation_date']=date('Y-m-d H:i:s');
	    		$data['PerPeopleType']['user_id']=$usuario;
				$response['data']=$data;
			if ($this->PerPeopleType->save($data)) {
				$response['success']=true;
				$response['last_id']=$this->PerPeopleType->id;
				$response['message']='The PeopleType was saved';
			} else {
				$response['success']=false;
				$response['message']='The PeopleType was not saved';
				$response['last_id']=false;
			
			}
			return $response;
	}
	
		public function findperson($idper_people_type = null) {
			
			$idperson=$this->PerPeopleType->find('first',array('conditions'=>array('PerPeopleType.id'=>$idper_people_type)));
			
			if($idperson != null){
				$idper_people_typef=$idperson['PerPeopleType']['person_id'];
				
					if($idper_people_typef != null){
						
						$idpersonfi=$this->Person->find('first',array('conditions'=>array('Person.id_person'=>$idper_people_typef),'fields'=>array('Person.id_person','Person.completename')));
						$personfin['personname']=$idpersonfi['Person']['completename'];
					}
					else{
						$personfin['success']=false;
						$personfin['message']='The idperson was empty';
					}
					
				$personfin['success']=true;
			}
			else{
				$personfin['success']=false;
				$personfin['message']='The idper_people_typef was empty';
			}
			
			return $personfin;
		}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PerPeopleType->exists($id)) {
			throw new NotFoundException(__('Invalid people type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PerPeopleType->save($this->request->data)) {
				$this->Session->setFlash(__('The people type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The people type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PerPeopleType.' . $this->PerPeopleType->primaryKey => $id));
			$this->request->data = $this->PerPeopleType->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	
	public function delete($people_type_id = null) {	
		//$this->request->onlyAllow('post', 'delete');	

		if ($this->PerPeopleType->delete($people_type_id)) {		
			$response['success']=true;
		    
		} else {
			$response['success']=false;
			$response['message']='The PeopleType was not deleted';
		}
		
		return $response;
	}
	
	}
