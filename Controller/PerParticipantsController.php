<?php
App::uses('AppController', 'Controller');
App::import('Controller', 'PerPeopleTypes');
/**
 * PerParticipants Controller
 *
 * @property PerParticipant $PerParticipant
 * @property PaginatorComponent $Paginator
 */
class PerParticipantsController extends AppController {

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
		$this->PerParticipant->recursive = 0;
		$this->set('perParticipants', $this->Paginator->paginate());
	}
	
	public function index_service()
	{
		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$id_usuario = $this->Session->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
		$PerParticipant=$this->PerParticipant->find('all');
		$count=0;
		foreach ($PerParticipant as $key => $PerParticipant) {
			$idper_people_type=$PerParticipant['PerParticipant']['per_people_type_id'];
			$PerPeopleTypes = new PerPeopleTypesController;
			$per_trainers_responsefp=$PerPeopleTypes->findperson($idper_people_type);
			$totalpopulationtype='';
			foreach ($PerParticipant['PopulationType'] as $key => $popupaltiontype) {
				$totalpopulationtype=$popupaltiontype['name'].', '.$totalpopulationtype;
			}
			$totalpopulationtype= substr($totalpopulationtype, 0, -1);;
			$data['rows'][$count]=array(
					'id'=>$PerParticipant['PerParticipant']['id'],
					'people'=>$per_trainers_responsefp['personname'],
					'neighborhood'=>$PerParticipant['Neighborhood']['neighborhood_name'],
					'totalpopulationtype'=>trim($totalpopulationtype, ','),
					'other_population_type'=>$PerParticipant['PerParticipant']['other_population_type'],
					'marital_status'=>$PerParticipant['PerMaritalStatus']['name'],
					'school_level'=>$PerParticipant['PerSchoolLevel']['name'],
					'creation_date'=>$PerParticipant['PerParticipant']['creation_date'],
					'modification_date'=>$PerParticipant['PerParticipant']['modification_date'],
					'user_id'=>$PerParticipant['PerParticipant']['user_id'],
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
		if (!$this->PerParticipant->exists($id)) {
			throw new NotFoundException(__('Invalid per participant'));
		}
		$options = array('conditions' => array('PerParticipant.' . $this->PerParticipant->primaryKey => $id));
		$this->set('perParticipant', $this->PerParticipant->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PerParticipant->create();
			
			$usuario = $this->Session->read('Auth.User.id_user');
			$this->set('usuario',$usuario);
			
			
			$people_id=$this->request->data['Person']['Person'][0];
			$type_people='2';
				
			$this->set('people_id',$people_id);
			
			$PerPeopleTypes = new PerPeopleTypesController;
			
			$per_people_response=$PerPeopleTypes->add($people_id,$type_people,$usuario);
			
			
			if ($per_people_response['success']){
			
				if($per_people_response['last_id']){
					$per_people_id=$per_people_response['last_id'];
					$data=$this->request->data;
					$data['PerParticipant']['per_people_type_id']=$per_people_id;
					$data['PerParticipant']['creation_date']=date('Y-m-d H:i:s');
					$data['PerParticipant']['user_id']=$usuario;
					
					if ($this->PerParticipant->save($data)) {
						$this->Session->setFlash(__('The per participant has been saved.'));
						return $this->redirect(array('action' => 'index'));
			
					} else {
						$this->Session->setFlash(__('The per participant could not be saved. Please, try again.'));
					}
				}else{
					$this->Session->setFlash(__('No hay id'));
				}
			
			}else{
				$this->Session->setFlash(__($per_people_response['message']));
			
			}	
		}
		$neighborhoods = $this->PerParticipant->Neighborhood->find('list');
		$perPeopleTypes = $this->PerParticipant->PerPeopleType->find('list');
		$maritalStatuses = $this->PerParticipant->PerMaritalStatus->find('list',array('order' => array('PerMaritalStatus.name' => 'ASC')));
		$schoolLevels = $this->PerParticipant->PerSchoolLevel->find('list');
		$populationTypes = $this->PerParticipant->PopulationType->find('list');
		$trainings = $this->PerParticipant->Training->find('list');
		$this->set(compact('neighborhoods', 'perPeopleTypes', 'maritalStatuses', 'schoolLevels', 'populationTypes', 'trainings'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PerParticipant->exists($id)) {
			throw new NotFoundException(__('Invalid per participant'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PerParticipant->save($this->request->data)) {
				$this->Session->setFlash(__('The per participant has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The per participant could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PerParticipant.' . $this->PerParticipant->primaryKey => $id));
			$this->request->data = $this->PerParticipant->find('first', $options);
			
			$idper_people_type=$this->request->data['PerParticipant']['per_people_type_id'];
				
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
		$neighborhoods = $this->PerParticipant->Neighborhood->find('list');
		$perPeopleTypes = $this->PerParticipant->PerPeopleType->find('list');
		$maritalStatuses = $this->PerParticipant->PerMaritalStatus->find('list');
		$schoolLevels = $this->PerParticipant->PerSchoolLevel->find('list');
		$populationTypes = $this->PerParticipant->PopulationType->find('list');
		$trainings = $this->PerParticipant->Training->find('list');
		$this->set(compact('neighborhoods', 'perPeopleTypes', 'maritalStatuses', 'schoolLevels', 'populationTypes', 'trainings'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PerParticipant->id = $id;
		if (!$this->PerParticipant->exists()) {
			throw new NotFoundException(__('Invalid per participant'));
		}
		$this->request->onlyAllow('post', 'delete');
		
		$PerParticipant=$this->PerParticipant->find('first',array('conditions'=>array('PerParticipant.id'=>$id)));
		$people_type_id=$PerParticipant['PerParticipant']['per_people_type_id'];
		
		
		
		if ($this->PerParticipant->delete()) {
			
			$PerPeopleTypesd = new PerPeopleTypesController;
				
			$per_people_responsed=$PerPeopleTypesd->delete($people_type_id);
			
			
			if (!$per_people_responsed['success']){
				$this->Session->setFlash(__($per_people_responsed['message']));
			}
			else{
				$this->Session->setFlash(__('The per participant has been deleted.'));
			}
		} else {
			$this->Session->setFlash(__('The per participant could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	
	/**
	 * Json get participant
	 *
	 * @param string $query
	 * @return $array
	 */
	public function getParticipant() {
		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$queryString='%'.$_GET['q'].'%';
		$db = $this->PerParticipant->getDataSource();
		$participants=$db->fetchAll(
				" SELECT
			       t1.id, t2.person_id, t3.name , t3.lastname, t3.cedula , t4.name as nivel_escolar, t5.name as estado_civil, t6.neighborhood_name as barrio 
			   FROM
			       per_participants t1,
			       per_people_type t2,
			       people t3,
			       per_school_level t4,
			       per_marital_status t5,
				   neighborhoods t6
				
			   WHERE
			       t1.per_people_type_id = t2.id
			           AND t2.person_id = t3.id_person
			           AND t1.marital_status_id=t5.id
					   AND t1.school_level_id=t4.id
					   AND t1.neighborhood_id=t6.id
			           AND (
			   			CONCAT(t3.name, ' ', t3.lastname) LIKE :query
			               OR t3.cedula LIKE :query
			           )",
				array('query' => $queryString)
		);
		foreach ($participants as $key => $participant) {
			$json_data = array();
			$json_data = array(
					'id'=> $trainer['t1']['id'],
					'person_id' =>$trainer['t2']['person_id'],
					'name' =>$trainer['t3']['name'],
					'lastname' =>$trainer['t3']['lastname'],
					'cedula' =>$trainer['t3']['cedula'],
					'nivel_escolar' =>$trainer['t4']['nivel_escolar'],
					'estado_civil' =>$trainer['t5']['estado_civil'],
					'barrio' =>$trainer['t6']['barrio'],
					'completeName'=>$trainer['t3']['name']." ".$trainer['t3']['lastname']
			);
			$data[]=$json_data;
		}
		$this->set(compact('data')); // Pass $data to the view
		$this->set('_serialize', 'data'); // Let the JsonView class know what variable to use
	}
//End class
}
