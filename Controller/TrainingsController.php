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

/**
 * person_status
 *
 * @throws NotFoundException
 * @param string $search_query
 * @return json
 */

	public function person_status()
	{
		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$id_usuario = $this->Session->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
		$queryString='%'.$_GET['q'].'%';
		$id=$_GET['id'];
		$db = $this->Training->getDataSource();
		$persons=$db->fetchAll(
			   "SELECT 
					    id_person,
					    cedula,
					    email,
					    CONCAT(name, ' ', lastname) AS complete_name,
					    (SELECT 
					            participants.id
					        FROM
					            per_people_type,
					            per_participants AS participants
					        WHERE
					            person_id = people.id_person
					                AND participants.per_people_type_id = per_people_type.id
					                AND per_type_id = 2) AS id_participant,
					    (SELECT 
					            part_training.id
					        FROM
					            per_people_type,
					            per_participants AS participants,
					            per_participants_training part_training
					        WHERE
					            person_id = people.id_person
					                AND participants.per_people_type_id = per_people_type.id
					                AND per_type_id = 2
					                AND part_training.participant_id = participants.id
					                AND part_training.training_id = :id_formation) AS is_participant
					FROM
					    people
					WHERE
					    people.cedula LIKE :query
					        OR CONCAT(people.name, ' ', people.lastname) LIKE :query
					        OR people.email LIKE :query",
			    array('query' => $queryString,'id_formation'=>$id)
			);	

			foreach ($persons as $key => $trainer) {
				$json_data=array(
						'id'=>$trainer['people']['id_person'],
						'doc'=>$trainer['people']['cedula'],
						'email'=>$trainer['people']['email'],
						'complete_name'=>$trainer['0']['complete_name'],
						'id_participant'=>$trainer['0']['id_participant'],
						'is_participant'=>$trainer['0']['is_participant']
				);
				

				if(isset($trainer['0']['is_participant'])){
					//Is participant registered to this training
					$service=Router::url( array('controller' => 'Divulgations', 'action' => 'index'),true);
					$notice=array(
						'type'=>'alert',
						'message'=>__('The current person is already a participant of this training')
					);
				} else if (isset($trainer['0']['id_participant'])){
					//is participant but no registered to this training
					$service=Router::url( array('controller' => 'Divulgations', 'action' => 'index'),true);
					$notice=array(
						'type'=>'confirm',
						'message'=>__('The current person is already a participant in other training, Do you want to assign him into this training?')
					);
				} else{
					//is not participant but is a person
					$service=Router::url( array('controller' => 'Divulgations', 'action' => 'index'),true);	
					$notice=array(
						'type'=>'confirm',
						'message'=>__('The current person has never been a participant. Do you want to assign him to this training?')
					);			
				}

				$actions=array(
					'next-service'=>$service,
					'notice'=>$notice
				);	
				$json_data['actions']=$actions;
				$data[]=$json_data;
			}	
			$this->set(compact('data')); // Pass $data to the view
			$this->set('_serialize', 'data'); // Let the JsonView class know what variable to use
	}


	public function index_service()
	{
		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$id_usuario = $this->Session->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
		$db = $this->Training->getDataSource();
		$trainings=$db->fetchAll(
			   "SELECT 
				    t1.*,
				    t2.name AS training_type,
				    (SELECT 
				            GROUP_CONCAT(CONCAT(' ', p.name, ' ', p.lastname, ' '))
				        FROM
				            training_per_trainers tPer,
				            per_trainers per,
				            per_people_type perTy,
				            people p
				        WHERE
				            t1.id = tPer.training_id
				                AND tPer.per_trainer_id = per.id
				                AND per.per_people_type_id = perTy.id
				                AND perTy.person_id = p.id_person) AS formadores,				   
				    (SELECT 
				            GROUP_CONCAT(CONCAT(' ', name, ' '))
				        FROM
				            tra_allies_training ta,
				            tra_allies a
				        WHERE
				            t1.id = ta.training_id
				                AND ta.tra_ally_id = a.id) AS aliados,
				    (SELECT 
				            GROUP_CONCAT(CONCAT(' ', name, ' '))
				        FROM
				            tra_proccesses_training ta,
				            tra_processes a
				        WHERE
				            t1.id = ta.training_id
				                AND ta.process_id = a.id) AS procesos,
				    (SELECT 
				            GROUP_CONCAT(CONCAT(' ', name, ' '))
				        FROM
				            population_types_training ta,
				            population_types a
				        WHERE
				            t1.id = ta.training_id
				                AND ta.population_type_id = a.id_population_type) AS poblacion,
				    t3.username
				FROM
				    training t1,
				    tra_types t2,
				    users t3
				WHERE
				    t1.type_id = t2.id
				        AND t3.id_user = t1.user_id",
			    array('query' => '')
			);
			$count=0;
			foreach ($trainings as $key => $trainer) {
				$data['rows'][$count]=array(
						'id'=>$trainer['t1']['id'],
						'code'=>$trainer['t1']['code'],
						'activity_place'=>$trainer['t1']['activity_place'],
						'description'=>$trainer['t1']['description'],
						//'poblacion'=>$trainer['t1']['type_id'],
						'training_type'=>$trainer['t2']['training_type'],
						'formadores'=>$trainer['0']['formadores'],
						//'sitios'=>$trainer['0']['sitios'],
						'aliados'=>$trainer['0']['aliados'],
						'procesos'=>$trainer['0']['procesos'],
						'username'=>$trainer['t3']['username'],
						'user_id'=>$trainer['t1']['user_id'],
						'creation_date'=>$trainer['t1']['creation_date'],
						'modification_date'=>$trainer['t1']['modification_date']
				);
				$count++;
			}	
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
		
		$db = $this->Training->getDataSource();
		$trainings=$db->fetchAll(
				"SELECT
				    t1.*,
				    t2.name AS training_type,
				    (SELECT
				            GROUP_CONCAT(CONCAT(' ', p.name, ' ', p.lastname, ' '))
				        FROM
				            training_per_trainers tPer,
				            per_trainers per,
				            per_people_type perTy,
				            people p
				        WHERE
				            t1.id = tPer.training_id
				                AND tPer.per_trainer_id = per.id
				                AND per.per_people_type_id = perTy.id
				                AND perTy.person_id = p.id_person) AS formadores,				   
				    (SELECT
				            GROUP_CONCAT(CONCAT(' ', name, ' '))
				        FROM
				            tra_allies_training ta,
				            tra_allies a
				        WHERE
				            t1.id = ta.training_id
				                AND ta.tra_ally_id = a.id) AS aliados,
				    (SELECT
				            GROUP_CONCAT(CONCAT(' ', name, ' '))
				        FROM
				            tra_proccesses_training ta,
				            tra_processes a
				        WHERE
				            t1.id = ta.training_id
				                AND ta.process_id = a.id) AS procesos,
				    (SELECT
				            GROUP_CONCAT(CONCAT(' ', name, ' '))
				        FROM
				            population_types_training ta,
				            population_types a
				        WHERE
				            t1.id = ta.training_id
				                AND ta.population_type_id = a.id_population_type) AS poblacion,
				    t3.username
				FROM
				    training t1,
				    tra_types t2,
				    users t3
				WHERE
				    t1.type_id = t2.id
				        AND t3.id_user = t1.user_id AND t1.id = $id",
				array('query' => '')
		);
		$this->request->data['trainings']=$trainings;
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
			$code=$this->codeFirst.strtoupper($pro_prefix).date('Y').'-'.$training_count;

			//validación de tablas intermedias..				
				$save_switch=true;
	
				/*if(empty($this->request->data['Site']['Site'])){
					$msg=__('Verifica que el campo sitio este lleno.');
					$save_switch=false;
				}*/
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
				//debug($data);
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
		//$sites = $this->Training->Site->find('list');
		$populationtype = $this->Training->PopulationType->find('list');
		$this->set(compact('types', 'processes','TraAllies','populationtype'));

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
			$data=$this->request->data;
			unset($data['Training']['code']);
			if ($this->Training->save($data)) {
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
		//$sites = $this->Training->Site->find('list');
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
		$this->set(compact('types', 'processes','allies','populationtypes'));

	}
/**
 * admin method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin($id = null) {
		if (!$this->Training->exists($id)) {
			throw new NotFoundException(__('Invalid training'));
		}
		$options = array('conditions' => array('Training.' . $this->Training->primaryKey => $id));
		$this->request->data = $this->Training->find('first', $options);
		$types = $this->Training->TraType->find('list');
		$processes = $this->Training->TraProcess->find('list');
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
		$this->set(compact('types', 'processes','allies','populationtypes'));

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
	}
	
	//servicio training...
	public function getTraining() {
		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$queryString=$_GET['q'];
		$condition=array('OR' => array(
				array('Training.code LIKE' => '%'.$queryString.'%'),
				array('Training.activity_place LIKE' => '%'.$queryString.'%')
		));
	
		$training=$this->Training->find('list',array('fields'=>array('Training.id','Training.code','Training.activity_place'),'order' => array('Training.id' => 'ASC'),'conditions' => $condition));
		foreach ($training as $activity_place => $value) {
			$json_data = array();
			$json_data['activity_place']=$activity_place;
			$array_keys=array_keys($value);
			$json_data['id']=$array_keys[0];			
			$json_data['code']=$value[$array_keys[0]];
			$data[]=$json_data;
		}
		$this->set(compact('data')); // Pass $data to the view
		$this->set('_serialize', 'data'); // Let the JsonView class know what variable to use
	}
}
