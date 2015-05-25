<?php
App::uses('AppController', 'Controller');
App::import('Controller', 'PerPeopleTypes');
/**
 * PerTrainers Controller
 *
 * @property PerTrainer $PerTrainer
 * @property PaginatorComponent $Paginator
 */
class PerTrainersController extends AppController {
	var $uses = array('Person','PerTrainer');
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



	public function isAuthorized($user) {
		// Any registered user can access public functions
		
		if ((isset($user['permission_level']) && $user['permission_level'] == '1')||(isset($user['permission_level']) && $user['permission_level'] == '2')||(isset($user['permission_level']) && $user['permission_level'] == '3')||(isset($user['permission_level']) && $user['permission_level'] == '4')||(isset($user['permission_level']) && $user['permission_level'] == '5')) {
			return true;
		}	
	}


	public function index() {
		$this->PerTrainer->recursive = 0;
		$this->set('perTrainers', $this->Paginator->paginate());
	}
	
	
	public function index_service()
	{
		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$id_usuario = $this->Session->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
		$PerTrainer=$this->PerTrainer->find('all');
		$count=0;
		foreach ($PerTrainer as $key => $PerTrainer) {
			
			
			$idper_people_type=$PerTrainer['PerTrainer']['per_people_type_id'];
			$PerPeopleTypes = new PerPeopleTypesController;
				
			$per_trainers_responsefp=$PerPeopleTypes->findperson($idper_people_type);
		
			
			$data['rows'][$count]=array(
					'id'=>$PerTrainer['PerTrainer']['id'],
					'people'=>$per_trainers_responsefp['personname'],
					'per_trainer_type'=>$PerTrainer['PerTrainerType']['name'],
					'per_profession'=>$PerTrainer['PerProfession']['name'],
					'per_trainer_fund'=>$PerTrainer['PerTrainerFund']['name'],
					'observations'=>$PerTrainer['PerTrainer']['observations'],
					'state'=>$PerTrainer['PerTrainer']['state'],
					'creation_date'=>$PerTrainer['PerTrainer']['creation_date'],
					'modification_date'=>$PerTrainer['PerTrainer']['modification_date'],
					'user_id'=>$PerTrainer['PerTrainer']['user_id'],
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
		if (!$this->PerTrainer->exists($id)) {
			throw new NotFoundException(__('Invalid trainer'));
		}
		$options = array('conditions' => array('PerTrainer.' . $this->PerTrainer->primaryKey => $id));
		$this->set('perTrainer', $this->PerTrainer->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PerTrainer->create();
			
			$usuario = $this->Session->read('Auth.User.id_user');
			$this->set('usuario',$usuario);
			
			$people_id=$this->request->data['Person']['Person'][0];
			$type_people='1';
			
			$this->set('people_id',$people_id);
			
			//$this->set(compact('people_id', 'type_people'));
			
			
			$PerPeopleTypes = new PerPeopleTypesController;

			$per_people_response=$PerPeopleTypes->add($people_id,$type_people,$usuario);
			
			if ($per_people_response['success']){
				
				if($per_people_response['last_id']){
					$per_people_id=$per_people_response['last_id'];
					$data=$this->request->data;
					$data['PerTrainer']['per_people_type_id']=$per_people_id;
					$data['PerTrainer']['creation_date']=date('Y-m-d H:i:s');
					$data['PerTrainer']['user_id']=$usuario;
					if ($this->PerTrainer->save($data)) {
						$this->Session->setFlash(__('El formador ha sido guardado.'));
						return $this->redirect(array('action' => 'index'));
						
					} else {
						$this->Session->setFlash(__('El formador no se pudo guardar . Por favor , vuelva a intentarlo.'));
					}
				}else{
					$this->Session->setFlash(__('No hay id'));
				}	
								
			}else{
				$this->Session->setFlash(__($per_people_response['message']));
				
			}
			
		}

		$perTrainerTypes = $this->PerTrainer->PerTrainerType->find('list',array('order' => array('PerTrainerType.name ASC')));
		$perProfessions = $this->PerTrainer->PerProfession->find('list');
		$perPeopleTypes = $this->PerTrainer->PerPeopleType->find('list');
		$perTrainerFunds = $this->PerTrainer->PerTrainerFund->find('list');
		$this->set(compact('perTrainerTypes', 'perProfessions', 'perPeopleTypes', 'perTrainerFunds', 'sites', 'people'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PerTrainer->exists($id)) {
			throw new NotFoundException(__('Invalid trainer'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PerTrainer->save($this->request->data)) {
				$this->Session->setFlash(__('El formador ha sido guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El formador no se pudo guardar . Por favor , vuelva a intentarlo.'));
			}
		} else {
			$options = array('conditions' => array('PerTrainer.' . $this->PerTrainer->primaryKey => $id));
			$this->request->data = $this->PerTrainer->find('first', $options);
			
			$idper_people_type=$this->request->data['PerTrainer']['per_people_type_id'];
			
			$PerPeopleTypes = new PerPeopleTypesController;
			
			$per_trainers_responsefp=$PerPeopleTypes->findperson($idper_people_type);
			
				if ($per_trainers_responsefp['success']){
					
					if(!$per_trainers_responsefp['personname']){
						$this->Session->setFlash(__('Do not name the person was obtained'));
					}
				}
				else{
					$this->Session->setFlash(__($per_trainers_responsefp['message']));
				}

			$this->set('per_trainers_responsefp',$per_trainers_responsefp);
			
		}
		$perTrainerTypes = $this->PerTrainer->PerTrainerType->find('list');
		$perProfessions = $this->PerTrainer->PerProfession->find('list');
		$perPeopleTypes = $this->PerTrainer->PerPeopleType->find('list');
		$perTrainerFunds = $this->PerTrainer->PerTrainerFund->find('list');
		//$sites = $this->PerTrainer->Site->find('list');
		$this->set(compact('perTrainerTypes', 'perProfessions', 'perPeopleTypes', 'perTrainerFunds'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PerTrainer->id = $id;
		if (!$this->PerTrainer->exists()) {
			throw new NotFoundException(__('Invalid trainer'));
		}
		$this->request->onlyAllow('post', 'delete');
		
		$PerTrainer=$this->PerTrainer->find('first',array('conditions'=>array('PerTrainer.id'=>$id)));
		$people_type_id=$PerTrainer['PerTrainer']['per_people_type_id'];
		
		
		
		if ($this->PerTrainer->delete()) {
			
			$PerPeopleTypesd = new PerPeopleTypesController;
			
			$per_people_responsed=$PerPeopleTypesd->delete($people_type_id);
			
			if (!$per_people_responsed['success']){
				$this->Session->setFlash(__($per_people_responsed['message']));
			}
			else{
			    $this->Session->setFlash(__('El formador ha sido eliminado.'));
			}
		} else {
			$this->Session->setFlash(__('El formador no se pudo eliminar . Por favor, vuelva a intentarlo.'));
		}
		
		return $this->redirect(array('action' => 'index'));
	}


	/**
	 * Json get trainer
	 *
	 * @param string $query
	 * @return $array
	 */
		public function getTrainer() {
		    $this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
			$queryString='%'.$_GET['q'].'%';
			$db = $this->PerTrainer->getDataSource();
			$trainers=$db->fetchAll(
			   " SELECT 
			       t1.id, t2.person_id, t3.name , t3.lastname, t3.cedula , t4.name as profesion, t5.name as tipo
			   FROM
			       per_trainers t1,
			       per_people_type t2,
			       people t3,
			       per_professions t4,
			       per_trainer_types t5
			   WHERE
			       t1.per_people_type_id = t2.id
			           AND t2.person_id = t3.id_person
			           AND t1.per_trainer_type_id=t5.id
			           AND t1.per_profession_id=t4.id
			           AND (
			   			CONCAT(t3.name, ' ', t3.lastname) LIKE :query
			               OR t3.cedula LIKE :query 
			           )",
			    array('query' => $queryString)
			);
			foreach ($trainers as $key => $trainer) {
					$json_data = array();
					$json_data = array(
									'id'=> $trainer['t1']['id'],
									'person_id' =>$trainer['t2']['person_id'],
									'name' =>$trainer['t3']['name'],
									'lastname' =>$trainer['t3']['lastname'],
									'cedula' =>$trainer['t3']['cedula'],
									'profesion' =>$trainer['t4']['profesion'],
									'tipo' =>$trainer['t5']['tipo'],
									'completeName'=>$trainer['t3']['name']." ".$trainer['t3']['lastname']
									);
					$data[]=$json_data;
			}	
			$this->set(compact('data')); // Pass $data to the view
			$this->set('_serialize', 'data'); // Let the JsonView class know what variable to use
		}
		
//End class		
}





