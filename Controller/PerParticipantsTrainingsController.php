<?php
App::uses('AppController', 'Controller');
/**
 * PerParticipantsTrainings Controller
 *
 * @property PerParticipantsTraining $PerParticipantsTraining
 * @property PaginatorComponent $Paginator
 */
class PerParticipantsTrainingsController extends AppController {

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
		$this->PerParticipantsTraining->recursive = 0;
		$this->set('perParticipantsTrainings', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PerParticipantsTraining->exists($id)) {
			throw new NotFoundException(__('Invalid per participants training'));
		}
		$options = array('conditions' => array('PerParticipantsTraining.' . $this->PerParticipantsTraining->primaryKey => $id));
		$this->set('perParticipantsTraining', $this->PerParticipantsTraining->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PerParticipantsTraining->create();
			if ($this->PerParticipantsTraining->save($this->request->data)) {
				$this->Session->setFlash(__('The per participants training has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The per participants training could not be saved. Please, try again.'));
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
	public function edit($id = null) {
		if (!$this->PerParticipantsTraining->exists($id)) {
			throw new NotFoundException(__('Invalid per participants training'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PerParticipantsTraining->save($this->request->data)) {
				$this->Session->setFlash(__('The per participants training has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The per participants training could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PerParticipantsTraining.' . $this->PerParticipantsTraining->primaryKey => $id));
			$this->request->data = $this->PerParticipantsTraining->find('first', $options);
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
		$this->PerParticipantsTraining->id = $id;
		if (!$this->PerParticipantsTraining->exists()) {
			throw new NotFoundException(__('Invalid per participants training'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PerParticipantsTraining->delete()) {
			$this->Session->setFlash(__('The per participants training has been deleted.'));
		} else {
			$this->Session->setFlash(__('The per participants training could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
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
    	$id_training=(isset($data['id']))?$data['id']:NULL;
		$error=false;
		$this->PerParticipantsTraining->id = $id_training;
		if (!$this->PerParticipantsTraining->exists()) {
			throw new NotFoundException(__('Invalid per participants training'));
		}
		try{
			if (!$this->PerParticipantsTraining->delete()) {
				throw new Exception();
			}
		}catch(Exception $e){
			$error=$e;
		}

		$success_actions=array(
			'reloadGrid'=>array('gridTrainingParticipant')
		);

		$actions=array();
		if(!$error){
			$message=__('EL participante fue removido correctamente de esta formación.');
			$actions=$success_actions;
		}else{
			$message=__('No ha sido posible remover el participante de esta formación.');
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

}
