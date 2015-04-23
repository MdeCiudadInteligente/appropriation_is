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
}
