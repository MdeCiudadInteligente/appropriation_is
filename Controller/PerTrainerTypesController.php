<?php
App::uses('AppController', 'Controller');
/**
 * PerTrainerTypes Controller
 *
 * @property PerTrainerType $PerTrainerType
 * @property PaginatorComponent $Paginator
 */
class PerTrainerTypesController extends AppController {

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
		$this->PerTrainerType->recursive = 0;
		$this->set('perTrainerTypes', $this->Paginator->paginate());
	}
	
	
	public function index_service()
		{
			$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
			$id_usuario = $this->Session->read('Auth.User.id_user');
			$this->set('id_usuario',$id_usuario);
			$PerTrainerType=$this->PerTrainerType->find('all');

			$count=0;
			foreach ($PerTrainerType as $key => $PerTrainerType) {
				$data['rows'][$count]=array(
						'id'=>$PerTrainerType['PerTrainerType']['id'],
						'name_tt'=>$PerTrainerType['PerTrainerType']['name'],
						'estado_tt'=>$PerTrainerType['PerTrainerType']['state'],
						'creation_date'=>$PerTrainerType['PerTrainerType']['creation_date'],
						'modification_date'=>$PerTrainerType['PerTrainerType']['modification_date'],
						'user_id'=>$PerTrainerType['PerTrainerType']['user_id'],
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
		if (!$this->PerTrainerType->exists($id)) {
			throw new NotFoundException(__('Invalid trainer type'));
		}
		$options = array('conditions' => array('PerTrainerType.' . $this->PerTrainerType->primaryKey => $id));
		$this->set('perTrainerType', $this->PerTrainerType->find('first', $options));
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
			
			$name_trainertype= $this->request->data['PerTrainerType']['name'];
			$verificar_trainertype=$this->PerTrainerType->query("select distinct name from per_trainer_types where name = '$name_trainertype'");
			$this->set('verificar_trainertype',$verificar_trainertype);
			
			if($verificar_trainertype==Array( )){

				$this->PerTrainerType->create();
				$data=$this->request->data;
				$data['PerTrainerType']['name'] = ucwords($data['PerTrainerType']['name']);
				$data['PerTrainerType']['creation_date']=date('Y-m-d H:i:s');
				$data['PerTrainerType']['user_id']=$usuario;
				
				
				if ($this->PerTrainerType->save($data)) {	
					$this->Session->setFlash(__('The trainer type has been saved.'));
					return $this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The trainer type could not be saved. Please, try again.'));
				}
			}	
			else{
				$this->Session->setFlash(__('The trainer type already exists , please check.'));
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
		if (!$this->PerTrainerType->exists($id)) {
			throw new NotFoundException(__('Invalid trainer type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			

			$usuario = $this->Session->read('Auth.User.id_user');
			$this->set('usuario',$usuario);
				
			$name_trainertype= $this->request->data['PerTrainerType']['name'];
			$verificar_trainertype=$this->PerTrainerType->query("select distinct name from per_trainer_types where name = '$name_trainertype'");
			$this->set('verificar_trainertype',$verificar_trainertype);
				
			if($verificar_trainertype==Array( )){

				if ($this->PerTrainerType->save($this->request->data)) {
					$this->Session->setFlash(__('The trainer type has been saved.'));
					
					debug($verificar_trainertype);
					return $this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The trainer type could not be saved. Please, try again.'));
				}
			}
			else{
				$this->Session->setFlash(__('The trainer type already exists , please check.'));
			}	
		} else {
			$options = array('conditions' => array('PerTrainerType.' . $this->PerTrainerType->primaryKey => $id));
			$this->request->data = $this->PerTrainerType->find('first', $options);
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
		$this->PerTrainerType->id = $id;
		if (!$this->PerTrainerType->exists()) {
			throw new NotFoundException(__('Invalid trainer type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PerTrainerType->delete()) {
			$this->Session->setFlash(__('The trainer type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The trainer type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
