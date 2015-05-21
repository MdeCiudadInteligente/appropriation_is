<?php
App::uses('AppController', 'Controller');
App::import('Controller', 'PerParticipantsTrainings');
App::import('Controller', 'Trainings');

/**
 * TraSessions Controller
 *
 * @property TraSession $TraSession
 * @property PaginatorComponent $Paginator
 */
class TraSessionsController extends AppController {

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
		$this->TraSession->recursive = 0;
		$this->set('traSessions', $this->Paginator->paginate());
	}
	
	
	
	public function index_service()
	{
		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$id_usuario = $this->TraSession->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
		$Session=$this->TraSession->find('all');
		$count=0;
		foreach ($Session as $key => $Session) {
			$totalsites='';
			foreach ($Session['Site'] as $key => $tsites) {
				$totalsites=$tsites['site_name'].', '.$totalsites;
			}
			$totalsites= substr($totalsites, 0, -1);
			
			$data['rows'][$count]=array(
					'id'=>$Session['TraSession']['id'],
					'training'=>$Session['Training']['code'],
					'site'=>trim($totalsites, ','),
					'observation'=>$Session['TraSession']['observation'],
					'start_date'=>$Session['TraSession']['start_date'],
					'start_time'=>$Session['TraSession']['start_time'],
					'end_time'=>$Session['TraSession']['end_time'],
					'creation_date'=>$Session['TraSession']['creation_date'],
					'modification_date'=>$Session['TraSession']['modification_date'],
					'user_id'=>$Session['TraSession']['user_id'],
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
		if (!$this->TraSession->exists($id)) {
			throw new NotFoundException(__('Invalid tra session'));
		}
		$options = array('conditions' => array('TraSession.' . $this->TraSession->primaryKey => $id));
		$this->set('traSession', $this->TraSession->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	
	
	public function add_service() {
		$this->request->onlyAllow('ajax');
		 // No direct access via browser URL - Note for Cake2.5: allowMethod()
			$usuario = $this->Session->read('Auth.User.id_user');
			$debug=array();
			$this->set('usuario',$usuario);
			$this->TraSession->create();
			$debug['request']=$this->request->data;
			$data=$this->request->data;
			$training_id=$this->request->query['training'];
			$data['TraSession']['training_id']=$training_id;
			$data['TraSession']['creation_date']=date('Y-m-d H:i:s');
			$data['TraSession']['user_id']=$usuario;
			$error=false;
			try{
				if (!$this->TraSession->save($data)) {
					throw new Exception();	
				} else {
					$lastid=$this->TraSession->id;
				}
			} catch(Exception $e) {
			    $error=$e;
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
				'reloadGrid'=>array('gridTrainingSessions')
			);

			$actions=array();
			if(!$error){
				$message=__('La sesión fue guardada correctamente.');
				$actions=$success_actions;
			}else{
				$message=__('La sesión no pudo ser eliminada.Por favor intente de nuevo mas tarde.');
			}
			$notify=array(
				'notify'=>array(
						'type'=>'flash',
						'message'=>mb_convert_encoding($message, "UTF-8", "Windows-1252"),
						'autoclose'=>2000
				)
			);
			$actions=array_merge($notify,$actions);
			$response['sendData']=$data;
			$response['error']=$error;
			$response['debug']=array('data'=>$debug);
			$response['actions']=$actions;
			$this->set(compact('response')); // Pass $data to the view
			$this->set('_serialize', 'response'); // Let the JsonView class know what variable to use
	}

/**
 * add method service
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$usuario = $this->Session->read('Auth.User.id_user');
			$this->set('usuario',$usuario);
					
			$this->TraSession->create();
			
			$data=$this->request->data;
			$data['TraSession']['creation_date']=date('Y-m-d H:i:s');
			$data['TraSession']['user_id']=$usuario;
			
			
			if ($this->TraSession->save($data)) {
				$this->Session->setFlash(__('La sesión fue almacenada correctamente.'));		
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La sesíon no pudo ser almacenada. Por favor intente de nuevo mas tarde.'));
			}
		}
		$trainings = $this->TraSession->Training->find('list');
		$this->set(compact('trainings'));
	}

/**
 * add method service
 *
 * @return void
 */
	public function add_service_view() {
	
	
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->TraSession->exists($id)) {
			throw new NotFoundException(__('Invalid tra session'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TraSession->save($this->request->data)) {
				$this->Session->setFlash(__('La sesión fue almacenada correctamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La sesíon no pudo ser almacenada. Por favor intente de nuevo mas tarde.'));
			}
		} else {
			$options = array('conditions' => array('TraSession.' . $this->TraSession->primaryKey => $id));
			$this->request->data = $this->TraSession->find('first', $options);
		}
		$trainings = $this->TraSession->Training->find('list');
		$thematicstypes = $this->TraSession->Thematic->find('list',array('order' => array('Thematic.name' => 'ASC')));
		$this->set(compact('trainings','thematicstypes'));
		
		$db = $this->TraSession->getDataSource();
		$trainers=$db->fetchAll(
			  "SELECT
			       t1.id, t3.name , t3.lastname
			   FROM
			       per_trainers t1,
			       per_people_type t2,
			       people t3,
				   tra_sessions_per_trainers t4	
			   WHERE
			       t1.per_people_type_id = t2.id
			       AND t2.person_id = t3.id_person
				   AND t4.trainer_id=t1.id
				   AND t4.session_id= :id_session	
			   ",
				array('id_session' => $id)
		);
		
		$this->request->data['trainers']=$trainers;
	}



	public function getRegisteredParticipantsAssist($id_training,$id_session){
		if (!$this->TraSession->exists($id_session)) {
			throw new NotFoundException(__('Invalid Session'));
		}		
		$db = $this->TraSession->getDataSource();
		$participants=$db->fetchAll(
			   "SELECT t1.*,
				CONCAT(t4.name,' ',t4.lastname) as person_name,t2.other_population_type,t6.neighborhood_name,t7.name as marital_status ,t8.name as school_level , t5.username,
				(SELECT GROUP_CONCAT(population_types.name) FROM per_participants_population_types ,population_types WHERE per_participants_population_types.participant_id=t2.id AND per_participants_population_types.population_type_id=population_types.id_population_type ) as population_types,
				(
					SELECT per_participants_training_session.id
				    FROM per_participants_training_session
				    WHERE per_participants_training_session.participants_training_id=t1.id
				    AND  per_participants_training_session.session_id=:session_id
				) as assist
				FROM  per_participants_training t1, per_participants t2, per_people_type t3, people t4,users t5 ,neighborhoods t6, per_marital_status t7 , per_school_level t8 
				WHERE t1.participant_id=t2.id
				AND   t2.neighborhood_id=t6.id_neighborhood
				AND   t2.marital_status_id=t7.id
				AND   t2.school_level_id=t8.id
				AND   t2.per_people_type_id=t3.id
				AND   t3.person_id=t4.id_person
				AND   t1.user_id=t5.id_user
				AND   t1.training_id=:training",
			    array('training' => $id_training,'session_id'=>$id_session)
			);
			$data=array();
			foreach ($participants as $key => $value) {
				$data[]=array(
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
						'assist'=>$value['0']['assist'],
						'username'=>$value['t5']['username'],
						'user_id'=>$value['t1']['user_id'],
						'creation_date'=>$value['t1']['creation_date'],
						'modification_date'=>$value['t1']['modification_date']
				);
			}	

			return $data;
	}




/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */

	public function assist($id=null) {
		$session_id=$id;
		$PerParticipants = new PerParticipantsTrainingsController();
		$TrainingsController = new TrainingsController();
		if (!$this->TraSession->exists($session_id)) {
			throw new NotFoundException(__('Invalid session'));
		}
		$optionsSession = array('conditions' => array('TraSession.' . $this->TraSession->primaryKey => $session_id));
		$session=$this->TraSession->find('first', $optionsSession);
		$training_id=$session['TraSession']['training_id'];
		$participants=$this->getRegisteredParticipantsAssist($training_id,$session_id);
		$SaveFormService=Router::url( array('controller' => 'PerParticipantsTrainingSessions', 'action' => 'service_save_assist','?'=>array(
				'session'=>$session_id
				)
			),true
		);
		$data=$this->request->data;
		$data['participants']=$participants;
		$data['session']=$session;
		$data['formService']=$SaveFormService;
		$this->request->data=$data;
	}




/**
 * remove_participant_from_training
 *
 * @throws NotFoundException
 * @param  array $data
 * @return json
 */


	public function service_delete() {
		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
    	$id_usuario = $this->Session->read('Auth.User.id_user');
    	$data=$this->request->data;
    	$id_session=(isset($data['id']))?$data['id']:NULL;
		$error=false;
		$this->TraSession->id = $id_session;
		if (!$this->TraSession->exists()) {
			throw new NotFoundException(__('Invalid per participants training'));
		}
		try{
			if (!$this->TraSession->delete()) {
				throw new Exception();
			}
		}catch(Exception $e){
			$error=$e;
		}

		$success_actions=array(
			'reloadGrid'=>array('gridTrainingSessions')
		);

		$actions=array();
		if(!$error){
			$message=__('La sesión ha sido correctamente eliminada.');
			$actions=$success_actions;
		}else{
			$message=__('No ha sido posible eliminar la sesión. Por favor intente de nuevo mas tarde.');
		}
		$notify=array(
			'notify'=>array(
					'type'=>'flash',
					'message'=>mb_convert_encoding($message, "UTF-8", "Windows-1252"),
					'autoclose'=>2000
			)
		);
		$actions=array_merge($notify,$actions);
		$response['sendData']=$data;
		$response['error']=$error;
		$response['actions']=$actions;
		$this->set(compact('response')); // Pass $data to the view
		$this->set('_serialize', 'response'); // Let the JsonView class know what variable to use
	}


	
	public function delete($id = null) {
		$this->TraSession->id = $id;
		if (!$this->TraSession->exists()) {
			throw new NotFoundException(__('Invalid tra session'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TraSession->delete()) {
			$this->Session->setFlash(__('La sesión ha sido correctamente eliminada.'));
		} else {
			$this->Session->setFlash(__('No ha sido posible eliminar la sesión. Por favor intente de nuevo mas tarde.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

}
	
