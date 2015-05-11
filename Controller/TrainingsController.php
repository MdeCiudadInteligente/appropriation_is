<?php
App::uses('AppController', 'Controller');
App::import('Controller', 'People');
App::import('Controller', 'PerPeopleTypes');
App::import('Controller', 'PerParticipants');
App::import('Controller', 'PerParticipantsTrainings');
/**
 * Trainings Controller
 *
 * @property Training $Training
 * @property PaginatorComponent $Paginator
 */
class TrainingsController extends AppController {

  //var $uses = array('PerParticipant');
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
					                AND part_training.training_id = :id_formation LIMIT 1) AS is_participant
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
					$service=Router::url( array('controller' => 'Trainings', 'action' => 'registerParticipant','?'=>array(
								'type'=>'registered',
								'id'=>$trainer['people']['id_person'],
								'training'=>$id,
								'id_participant'=>$trainer['0']['id_participant'],
								'id_asistant'=>$trainer['0']['is_participant']
							)
						),true
					);
					$notice=array(
						'type'=>'alert',
						'message'=>__('The current person is already a participant of this training')
					);
				} else if (isset($trainer['0']['id_participant'])){
					//is participant but no registered to this training
					$service=Router::url( array('controller' => 'Trainings', 'action' => 'registerParticipant','?'=>array(
								'type'=>'training',
								'id'=>$trainer['people']['id_person'],
								'training'=>$id,
								'id_participant'=>$trainer['0']['id_participant']
							)
						),true
					);
					$notice=array(
						'type'=>'confirm',
						'message'=>__('The current person is already a participant in other training, Do you want to assign him into this training?')
					);
				} else{
					//is not participant but is a person
					$service=Router::url( array('controller' => 'Trainings', 'action' => 'registerParticipant','?'=>array(
								'type'=>'person',
								'id'=>$trainer['people']['id_person'],
								'training'=>$id
							)
						),true
					);
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

/**
 * complete_participant_data
 *
 * @throws NotFoundException
 * @param  array $data
 * @return json
 */

	public function complete_participant_data()
	{
		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
    	$id_usuario = $this->Session->read('Auth.User.id_user');
    	$data=$this->request->data;
    	$id_training=(isset($data['id_training']))?$data['id_training']:NULL;
		$Person = new PeopleController();
		$PerPeopleTypes = new PerPeopleTypesController();
		$PerParticipants = new PerParticipantsController();
		$PerParticipantsTrainings = new PerParticipantsTrainingsController();
		$currentDate=date('Y-m-d H:i:s');
		$datasource = $this->Training->getDataSource();
		//Set save data , if Ids edit 
		$PersonData=array('Person'=>array_merge($data['Person'],array('creation_date'=>$currentDate,'user_id'=>$id_usuario)));
    	$id_person=(isset($data['id_person']))?$data['id_person']:NULL;
    	if($id_person){
    		$PersonData['Person']['id_person']=$id_person;
    	}
		$PerParticipantData=array(
			'PopulationType'=>$data['PopulationType'],
			'PerParticipant'=>array_merge($data['PerParticipant'],array('creation_date'=>$currentDate,'user_id'=>$id_usuario))
		);
    	$id_participant=(isset($data['participant_id']))?$data['participant_id']:NULL;
    	$id_training_participant=(isset($data['id_training_participant']))?$data['id_training_participant']:NULL;
    	if($id_participant){
			$PerParticipantData['PerParticipant']['id']=$id_participant;    		
    		if(!$id_training_participant){
    			$registerParticipant=true;
    			$ParticipantExist=true;
				$PerParticipantsTrainingData=array('PerParticipantsTraining' =>array_merge(array(
						'training_id'=>$id_training,
						'participant_id'=>$id_participant
					),array('creation_date'=>$currentDate,'user_id'=>$id_usuario))
				);
    		}else{
    			$registerParticipant=false;
    		}
    	}else{
    		$registerParticipant=true;
			$PerParticipantsTrainingData=array('PerParticipantsTraining' =>array_merge(array(
					'training_id'=>$id_training
				),array('creation_date'=>$currentDate,'user_id'=>$id_usuario))
			);
    	}
		$error=false;
		$commit_switch=0;
		$debug="";
		try{
		    $datasource->begin();
		    if(!$Person->Person->save($PersonData)){
		        throw new Exception();
		    }else{
		    	$person_id=($id_person)?$id_person:$Person->Person->getLastInsertId();
		    	$commit_switch=1;
				$type_people='2';
				$PerPeopleTypes = new PerPeopleTypesController;
				if(!$id_participant){
					$per_people_response=$PerPeopleTypes->add($person_id,$type_people,$id_usuario);
					$per_people_type_id=isset($per_people_response['last_id'])?$per_people_response['last_id']:false;
					$debug['peopleTypeResponse']=$per_people_response;
					if($per_people_type_id){
						$PerParticipantData['PerParticipant']['per_people_type_id']=$per_people_type_id;
						$commit_switch='2-newParticipant';
						$newParticipant=true;
					}else{
						$debug['errorMsg'][]='Fail to create people type id';
					}
				}else{
					$newParticipant=false;
					$commit_switch='2-existent-participant';
				}
				if (!$PerParticipants->PerParticipant->save($PerParticipantData)) {
					throw new Exception();				
				}else {
					$commit_switch=3;
					if($registerParticipant){
						if(!isset($ParticipantExist)){
							$PerParticipantsTrainingData['PerParticipantsTraining']['participant_id']=$PerParticipants->PerParticipant->getLastInsertID();
						}
						$debug=$PerParticipantsTrainingData;
						if(!$PerParticipantsTrainings->PerParticipantsTraining->save($PerParticipantsTrainingData)){
							throw new Exception();
						}else{
							$commit_switch='4-registerParticipant';
						}
					}
					
				}
		    }
		    $datasource->commit();
		    $commit='commit';
		} catch(Exception $e) {
		    $error=$e;
		    $datasource->rollback();
		    $commit='rollback';
		}   	
		//Response actions 
		$success_actions=array(
			'closeAside'=>array(
				array(
					'element'=>'#right-content-aside',
					'wipe'=>true,
					'time'=>2000
				)
			),
			'reloadGrid'=>array('gridTrainingParticipant'),
			'cleanform' =>array('.add-participant form .seccion-person')
		);
		$actions=array();
		if(!$error){
			$message=__("The parcticipant was succesfully registered to this training");
			$actions=$success_actions;
		}else{
			$message=__("The parcticipant  was not registered to this training.please try again later");
		}
		$notify=array(
			'notify'=>array(
					'type'=>'flash',
					'message'=>$message,
					'autoclose'=>2000
			)
		);
		$actions=array_merge($notify,$actions);
		$response['sendData']=array_merge($PersonData,$PerParticipantData,$PerParticipantsTrainingData);
		$response['error']=$error;
		$response['debug']=array('data'=>$debug,'switch'=>$commit_switch,'commit'=>$commit);
		$response['actions']=$actions;
		$this->set(compact('response')); // Pass $data to the view
		$this->set('_serialize', 'response'); // Let the JsonView class know what variable to use
	}



/**
 * registerParticipant
 *
 * @throws NotFoundException
 * @param  int $registerType
 * @return json view
 */

	public function registerParticipant()
	{
		$id_usuario = $this->Session->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
		$person_id=(isset($this->request->query['id']))?$this->request->query['id']:NULL;
		$training_id=(isset($this->request->query['training']))?$this->request->query['training']:NULL;
		if($person_id){
			$db = $this->Training->getDataSource();
			$completePerson=$db->fetchAll(
					"SELECT
						people.*,
						per_participants.*,
	                    per_marital_status.name as marital_status,
	                    per_school_level.name as school_level,
	                    neighborhoods.neighborhood_name as neighborhood,
	                    neighborhoods.id_neighborhood,
	                    per_participants_training.id as is_training
						FROM  
						      people LEFT JOIN per_people_type           ON per_people_type.person_id=people.id_person 
									 LEFT JOIN per_participants          ON per_participants.per_people_type_id=per_people_type.id 
						             LEFT JOIN per_participants_training ON per_participants_training.participant_id=per_participants.id 
	                                 LEFT JOIN per_marital_status        ON per_participants.marital_status_id=per_marital_status.id
	                                 LEFT JOIN per_school_level          ON per_participants.school_level_id=per_school_level.id
	                                 LEFT JOIN neighborhoods             ON per_participants.neighborhood_id=neighborhoods.id_neighborhood
						WHERE
							  people.id_person=:person_id",
					array('person_id' => $person_id)
			);

			if(isset($completePerson[0]['per_participants']['id'])){
				$participantPopulation=$db->fetchAll(
						"SELECT 
						    population_types.id_population_type,
						    population_types.name
						FROM
						    per_participants_population_types,
						    per_participants,
						    population_types
						WHERE
						    per_participants_population_types.participant_id = per_participants.id
						    AND per_participants_population_types.population_type_id = population_types.id_population_type
						    AND per_participants.id = :per_participant_id",
						array('per_participant_id' => $completePerson[0]['per_participants']['id'])
				);
			
				$PerParticipantsTrainings = new PerParticipantsTrainingsController();
				$options = array('conditions' => array('PerParticipantsTraining.participant_id'=> $completePerson[0]['per_participants']['id'],'PerParticipantsTraining.training_id'=>$training_id));
				$currentTraining= $PerParticipantsTrainings->PerParticipantsTraining->find('first', $options);
			}
		}

		$data=$this->request->data;
		$data['saveService']=Router::url( array('controller' => 'Trainings', 'action' => 'complete_participant_data',
							'ext'=>'json'
						),true
		);
		$data['PerParticipant']=isset($completePerson[0]['per_participants'])?$completePerson[0]['per_participants']:NULL;
		$data['Person']=(isset($completePerson[0]['people']))?$completePerson[0]['people']:NULL;
		$data['PopulationType']=(isset($participantPopulation))?$participantPopulation:NULL;
		$data['Neighborhood']=(isset($completePerson[0]['neighborhoods']['id_neighborhood']))?array(
			'id'    => $completePerson[0]['neighborhoods']['id_neighborhood'],
			'name'  =>$completePerson[0]['neighborhoods']['neighborhood']
		):NULL;
		$data['CurrentTraining']=(isset($currentTraining))?$currentTraining:'';
		$this->request->data=$data;
		$PerParticipant = new PerParticipantsController();
		$maritalStatuses = $PerParticipant->PerParticipant->PerMaritalStatus->find('list');
		$schoolLevels = $PerParticipant->PerParticipant->PerSchoolLevel->find('list');
		$this->set(compact('maritalStatuses', 'schoolLevels'));
	}


/**
 * Main Grid Index
 *
 * @throws NotFoundException
 * @param  
 * @return json view
 */

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
 * Training Participants service
 *
 * @throws NotFoundException
 * @param  $id_training
 * @return json view
 */

	public function index_participants()
	{
		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$id_usuario = $this->Session->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
		$id_training=$this->request->query['training'];
		$db = $this->Training->getDataSource();
		$participants=$db->fetchAll(
			   "SELECT t1.*,CONCAT(t4.name,' ',t4.lastname) as person_name,t2.other_population_type,t6.neighborhood_name,t7.name as marital_status ,t8.name as school_level , t5.username,
					(SELECT GROUP_CONCAT(population_types.name) FROM per_participants_population_types ,population_types WHERE per_participants_population_types.participant_id=t2.id AND per_participants_population_types.population_type_id=population_types.id_population_type ) as population_types
				FROM  per_participants_training t1, per_participants t2, per_people_type t3, people t4,users t5 ,neighborhoods t6, per_marital_status t7 , per_school_level t8 
				WHERE t1.participant_id=t2.id
				AND   t2.neighborhood_id=t6.id_neighborhood
				AND   t2.marital_status_id=t7.id
				AND   t2.school_level_id=t8.id
				AND   t2.per_people_type_id=t3.id
				AND   t3.person_id=t4.id_person
				AND   t1.user_id=t5.id_user
				AND   t1.training_id=:training",
			    array('training' => $id_training)
			);
			$count=0;
			foreach ($participants as $key => $value) {
				$data['rows'][$count]=array(
						'id'=>$value['t1']['id'],
						'training_id'=>$value['t1']['training_id'],
						'participant_id'=>$value['t1']['participant_id'],
						'certification_status'=>$value['t1']['certification_status'],
						'person_name'=>$value['0']['person_name'],
						'population_types'=>$value['0']['population_types'],
						'other_population_type'=>$value['t2']['other_population_type'],
						'neighborhood_name'=>$value['t6']['neighborhood_name'],
						'marital_status'=>$value['t7']['marital_status'],
						'school_level'=>$value['t8']['school_level'],
						'username'=>$value['t5']['username'],
						'user_id'=>$value['t1']['user_id'],
						'creation_date'=>$value['t1']['creation_date'],
						'modification_date'=>$value['t1']['modification_date']
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
