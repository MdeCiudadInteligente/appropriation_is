<?php
App::uses('AppController', 'Controller');
App::import('Controller', 'TraSessions');

/**
 * PerParticipantsTrainingSessions Controller
 *
 * @property PerParticipantsTrainingSession $PerParticipantsTrainingSession
 * @property PaginatorComponent $Paginator
 */
class PerParticipantsTrainingSessionsController extends AppController {

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
		$this->PerParticipantsTrainingSession->recursive = 0;
		$this->set('perParticipantsTrainingSessions', $this->Paginator->paginate());
	}


/**
 * add method
 *
 * @return void
 */
	
	public function service_save_assist() {
		$this->request->onlyAllow('ajax');
		 // No direct access via browser URL - Note for Cake2.5: allowMethod()
			$usuario = $this->Session->read('Auth.User.id_user');
			$debug=array();
			$this->set('usuario',$usuario);
			$debug['request']=$this->request->data;
			$data=$this->request->data;
			$session_id=$this->request->query['session'];
			$error=false;
			$TraSessions = new TraSessionsController();
			$datasource = $this->PerParticipantsTrainingSession->getDataSource();
			$commit_switch=0;
			try{
				if (!$TraSessions->TraSession->exists($session_id)) {
					throw new NotFoundException(__('Invalid tra session'));
				}
				$datasource->begin();
				$delete= $this->PerParticipantsTrainingSession->deleteAll(array('PerParticipantsTrainingSession.session_id' => $session_id));
				$debug['delete']=$delete;
				$saveData=array();
				if(!$delete){
					throw new Exception(__('Could Not Delete the current associated assist'));
				}else{
					$commit_switch='1-Current_Assist_Deleted';
					if(isset($data['IdPerParticipantsTraining'])){
						if(!is_array($data['IdPerParticipantsTraining']))
							throw new Exception(__('Invalid format in participant data'));
						foreach ($data['IdPerParticipantsTraining'] as $key => $IdPerParticipantTraining) {
							$saveData=array(
								'PerParticipantsTrainingSession'=>array(
									'participants_training_id'=>$IdPerParticipantTraining,
									'session_id'=>$session_id
								)
							);
							$this->PerParticipantsTrainingSession->create();
							if(!$this->PerParticipantsTrainingSession->save($saveData)){
								throw new Exception(__('Invalid participant data'));
							}else{
								$debug['savedData'][]=$saveData;
							}
						}
						$emptyAllData=false;
					}else{
						$emptyAllData=true;
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
				'reloadGrid'=>array('gridTrainingSessions')
			);

			$actions=array();
			if(!$error){
				$message=__('The assistance of the session has been successfully updated');
				$actions=$success_actions;
			}else{
				$message=__('The assistance of the session cannot be updated. Please contact the administrator for more details' );
			}
			$notify=array(
				'notify'=>array(
						'type'=>'flash',
						'message'=>$message,
						'autoclose'=>2000
				)
			);
			$actions=array_merge($notify,$actions);
			$response['sendData']=$data;
			$response['error']=$error;
			$response['debug']=array('data'=>$debug,'commit'=>$commit,'emptyAllData'=>$emptyAllData);
			$response['actions']=$actions;
			$this->set(compact('response')); // Pass $data to the view
			$this->set('_serialize', 'response'); // Let the JsonView class know what variable to use
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->PerParticipantsTrainingSession->create();
			if ($this->PerParticipantsTrainingSession->save($this->request->data)) {
				$this->Session->setFlash(__('The per participants training session has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The per participants training session could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit_service() {
				//Eliminar
				$this->request->onlyAllow('ajax');				
				if ($this->request->is('post')) {
				
				$usuario = $this->Session->read('Auth.User.id_user');
				$this->set('usuario',$usuario);
				$data=$this->request->data;
				$idsession=$data['PerParticipantsTrainingSession']['session_id'];				
				$errordelete = False;
				
				try 
				{
					$pruebadelete = $this->PerParticipantsTrainingSession->deleteAll(array('PerParticipantsTrainingSession.session_id' => $idsession));
				}
				catch(Exception $e) 
				{
					$errordelete = $e;
				}
				
				if($errordelete == false)
				{
					$response['method']['success']=true;
					$notice=__(' El registro ha sido eliminado.');
					$alertType='flash';
				}
				else 
				{
					$response['method']['success']=false;
					$response['method']['errordelete']['obj']= $errordelete;
					$response['method']['errordelete']['delete']=$idsession;
					$notice=__(' El registro de la asistencia no ha sido eliminado.');
					$alertType='error';
					break;
				}
				//Guardar...
					
				$asistencia=(isset($data['PerParticipantsTrainingSession']['participants_training_id']))?$data['PerParticipantsTrainingSession']['participants_training_id']:array();
				$sessionasit=$data['PerParticipantsTrainingSession']['session_id'];
						
				if(!empty($asistencia))
				{
					$Error = False;
					foreach ($asistencia as $key => $asistencia)
					{			
						$this->PerParticipantsTrainingSession->create();
						$assistence['PerParticipantsTrainingSession']['participants_training_id']=$asistencia;
						$assistence['PerParticipantsTrainingSession']['session_id']=$sessionasit;
				
						try {
								$prueba= $this->PerParticipantsTrainingSession->save($assistence);
							}catch(Exception $e) {
								$Error= $e;
							}
					
					}
					if($Error == false){
						$response['method']['success']=true;
						$notice.=__(' El registro de la asistencia ha sido guardado');
						$alertType='flash';
					}
					else
						{
							$response['method']['success']=false;
							$response['method']['Error']['obj']= $Error;
							$response['method']['Error']['data']=$assistence;
							$notice.=__(' El registro de la asistencia no se ha guardado completamente.');
							$alertType='error';
							break;
						}
				}
				else
					{
						$notice=__(' El registro de la asistencia no puede ser guardado ya que no tiene datos');
						$response['method']['success']=false;
						$alertType='flash';
					}
					
					$response['class']['PerParticipantsTrainingSession']=$data['PerParticipantsTrainingSession'];
					$response['action']=array(  'notify'=>array(
							'type'=>$alertType,
							'notice'=>$notice,
							'ux'=>'down'
					)
					);
					
					$this->set(compact('response')); // Pass $data to the view
					$this->set('_serialize', 'response'); // Let the JsonView class know what variable to use
					
				}
				
			       
}

public function edit($id = null) {
		if (!$this->PerParticipantsTrainingSession->exists($id)) {
			throw new NotFoundException(__('Invalid per participants training session'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PerParticipantsTrainingSession->save($this->request->data)) {
				$this->Session->setFlash(__('The per participants training session has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The per participants training session could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PerParticipantsTrainingSession.' . $this->PerParticipantsTrainingSession->primaryKey => $id));
			$this->request->data = $this->PerParticipantsTrainingSession->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PerParticipantsTrainingSession->id = $id;
		if (!$this->PerParticipantsTrainingSession->exists()) {
			throw new NotFoundException(__('Invalid per participants training session'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PerParticipantsTrainingSession->delete()) {
			$this->Session->setFlash(__('The per participants training session has been deleted.'));
		} else {
			$this->Session->setFlash(__('The per participants training session could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
