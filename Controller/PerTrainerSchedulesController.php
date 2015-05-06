<?php
App::uses('AppController', 'Controller');
App::import('Controller', 'PerPeopleTypes');
/**
 * PerTrainerSchedules Controller
 *
 * @property PerTrainerSchedule $PerTrainerSchedule
 * @property PaginatorComponent $Paginator
 */
class PerTrainerSchedulesController extends AppController {

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
		$this->PerTrainerSchedule->recursive = 0;
		$this->set('perTrainerSchedules', $this->Paginator->paginate());
	}

	
	public function index_service()
	{
		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$id_usuario = $this->Session->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
		$TrainerSchedule=$this->PerTrainerSchedule->find('all');
	    //debug($TrainerSchedule);

		$count=0;
		foreach ($TrainerSchedule as $key => $TrainerSchedule) {
			
			$idper_people_type=$TrainerSchedule['PerTrainer']['per_people_type_id'];
			$PerPeopleTypes = new PerPeopleTypesController;
			$per_trainers_sch_response=$PerPeopleTypes->findperson($idper_people_type);
			
			
			$data['rows'][$count]=array(
					'id'=>$TrainerSchedule['PerTrainerSchedule']['id'],
					'day'=>$TrainerSchedule['PerTrainerSchedule']['day'],
					'start_time'=>$TrainerSchedule['PerTrainerSchedule']['start_time'],
					'end_time'=>$TrainerSchedule['PerTrainerSchedule']['end_time'],
					'people'=>$per_trainers_sch_response['personname'],
					'creation_date'=>$TrainerSchedule['PerTrainerSchedule']['creation_date'],
					'modification_date'=>$TrainerSchedule['PerTrainerSchedule']['modification_date'],
					'user_id'=>$TrainerSchedule['PerTrainerSchedule']['user_id'],
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
		if (!$this->PerTrainerSchedule->exists($id)) {
			throw new NotFoundException(__('Invalid per trainer schedule'));
		}
		$options = array('conditions' => array('PerTrainerSchedule.' . $this->PerTrainerSchedule->primaryKey => $id));
		$this->set('perTrainerSchedule', $this->PerTrainerSchedule->find('first', $options));
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
			
			$this->PerTrainerSchedule->create();
			$data=$this->request->data;
			$data['PerTrainerSchedule']['name'] = ucwords($data['PerTrainerSchedule']['name']);
			$data['PerTrainerSchedule']['creation_date']=date('Y-m-d H:i:s');
			$data['PerTrainerSchedule']['user_id']=$usuario;
			

			if ($this->PerTrainerSchedule->save($data)) {
				$this->Session->setFlash(__('The per trainer schedule has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The per trainer schedule could not be saved. Please, try again.'));
			}
		}
		$perTrainers = $this->PerTrainerSchedule->PerTrainer->find('list');
		$this->set(compact('perTrainers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PerTrainerSchedule->exists($id)) {
			throw new NotFoundException(__('Invalid per trainer schedule'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PerTrainerSchedule->save($this->request->data)) {
				$this->Session->setFlash(__('The per trainer schedule has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The per trainer schedule could not be saved. Please, try again.'));
			}
		}
		else {
			$options = array('conditions' => array('PerTrainerSchedule.' . $this->PerTrainerSchedule->primaryKey => $id));
			$this->request->data = $this->PerTrainerSchedule->find('first', $options);
			
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
		$perTrainers = $this->PerTrainerSchedule->PerTrainer->find('list');
		$this->set(compact('perTrainers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PerTrainerSchedule->id = $id;
		if (!$this->PerTrainerSchedule->exists()) {
			throw new NotFoundException(__('Invalid per trainer schedule'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PerTrainerSchedule->delete()) {
			$this->Session->setFlash(__('The per trainer schedule has been deleted.'));
		} else {
			$this->Session->setFlash(__('The per trainer schedule could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
