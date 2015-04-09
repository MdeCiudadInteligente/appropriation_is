<?php
App::uses('AppController', 'Controller');
/**
 * Trainings Controller
 *
 * @property Training $Training
 * @property PaginatorComponent $Paginator
 */
class TrainingsController extends AppController {

 // var $uses = array('TraProcess','TraAlly','TraType','PerTrainer');
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	protected $codeFirst='FO';

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Training->recursive = 0;
		$this->set('trainings', $this->Paginator->paginate());
	}



	public function index_service()
	{
		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$id_usuario = $this->Session->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
		$db = $this->Training->getDataSource();
		$trainings=$db->fetchAll(
			   "SELECT 
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
									'tipo' =>$trainer['t5']['tipo']
									);
					$data[]=$json_data;
			}	

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

			$this->set(compact('data')); // Pass $data to the view
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
		if (!$this->Training->exists($id)) {
			throw new NotFoundException(__('Invalid training'));
		}
		$options = array('conditions' => array('Training.' . $this->Training->primaryKey => $id));
		$this->set('training', $this->Training->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$usuario = $this->Session->read('Auth.User.id_user');	
			$data=$this->request->data;
      		$args=array(
					'conditions' => array('TraProcess.id' => $data['TraProcess']['TraProcess']),
				    'recursive' => -1,
				    'fields' => array('TraProcess.prefix'),
				    'limit'=>1
	    	);
			$process_prefix=$this->Training->TraProcess->find('list',$args);
			$training_count=$this->Training->find('count');
			$training_count=$training_count+1;
			$pro_prefix=implode($process_prefix,'-');
			$code=$this->codeFirst.$pro_prefix.date('Y').'-'.$training_count;

			//validación de tablas intermedias..				
				$save_switch=true;
	
				if(empty($this->request->data['Site']['Site'])){
					$msg=__('Verifica que el campo sitio este lleno.');
					$save_switch=false;
				}
				if(empty($this->request->data['TraProcess']['TraProcess'])){
					$msg.='<br>'.__('Verifica que el campo proceso este lleno.');
					$save_switch=false;
				}
				if(empty($this->request->data['TraAlly']['TraAlly'])){
					$msg.='<br>'.__('Verifica que el campo aliado este lleno.');
					$save_switch=false;
				}
				if(empty($this->request->data['PopulationType']['PopulationType'])){
					$msg.='<br>'.__('Verifica que el campo tipo de población este lleno.');
					$save_switch=false;
				}
			//end de validación de tablas intermedias...						

			if($data!=''){
				$data['Training']['creation_date']=date('Y-m-d H:i:s');
				$data['Training']['user_id']=$usuario;
				$data['Training']['code']=$code;
				$this->Training->create();

				if($save_switch){
					if ($this->Training->save($data)) {
						$this->Session->setFlash(__('The training has been saved.'));
						return $this->redirect(array('action' => 'index'));
					} else {
						$this->Session->setFlash(__('The training could not be saved. Please, try again.'));
					}
				}else{
						$this->Session->setFlash($msg);			
				}
			}else{
					$this->Session->setFlash(__('The training could not be saved. Please, try again.'));
			}		
		}
		$types = $this->Training->TraType->find('list');

		$processes = $this->Training->TraProcess->find('list');
		$TraAllies = $this->Training->TraAlly->find('list');
		$sites = $this->Training->Site->find('list');
		$populationtype = $this->Training->PopulationType->find('list');
		$this->set(compact('types', 'processes','TraAllies','sites','populationtype'));

	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Training->exists($id)) {
			throw new NotFoundException(__('Invalid training'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Training->save($this->request->data)) {
				$this->Session->setFlash(__('The training has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The training could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Training.' . $this->Training->primaryKey => $id));
			$this->request->data = $this->Training->find('first', $options);
		}
		$types = $this->Training->TraType->find('list');
		$processes = $this->Training->TraProcess->find('list');
		$sites = $this->Training->Site->find('list');
		$allies = $this->Training->TraAlly->find('list');
		$populationtypes = $this->Training->PopulationType->find('list');
		

		$db = $this->Training->getDataSource();
		$trainers=$db->fetchAll(
			  "SELECT
			       t1.id, t3.name , t3.lastname
			   FROM
			       per_trainers t1,
			       per_people_type t2,
			       people t3,
				   training_per_trainers t4	
			   WHERE
			       t1.per_people_type_id = t2.id
			       AND t2.person_id = t3.id_person
				   AND t4.per_trainer_id=t1.id
				   AND t4.training_id= :id_training	
			   ",
				array('id_training' => $id)
		);
		
		$this->request->data['trainers']=$trainers;
		$this->set(compact('types', 'processes','sites','allies','populationtypes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Training->id = $id;
		if (!$this->Training->exists()) {
			throw new NotFoundException(__('Invalid training'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Training->delete()) {
			$this->Session->setFlash(__('The training has been deleted.'));
		} else {
			$this->Session->setFlash(__('The training could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
