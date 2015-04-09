<?php
App::uses('AppController', 'Controller');
/**
 * Trainings Controller
 *
 * @property Training $Training
 * @property PaginatorComponent $Paginator
 */
class TrainingsController extends AppController {
	//var $uses = array('Training','TraType');
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
		$this->Training->recursive = 0;
		$this->set('trainings', $this->Paginator->paginate());
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
			$this->set('usuario',$usuario);
			
			$this->Training->create();
			$data=$this->request->data;
			
			//recuperación de variables para la validación de tablas intermedias...
			$id_site= $this->request->data['Site']['Site'];
			$id_process= $this->request->data['TraProcess']['TraProcess'];
			$id_ally= $this->request->data['TraAlly']['TraAlly'];
			$id_typo= $this->request->data['PopulationType']['PopulationType'];
			
			if($data!=''){					
				$data['Training']['creation_date']=date('Y-m-d H:i:s');
				$data['Training']['user_id']=$usuario;
				
				//validación de tablas intermedias..				
					if($id_site==''){
						$this->Session->setFlash(__('Verifica que el campo sitio este lleno.'));
					}
					if($id_process==''){
						$this->Session->setFlash(__('Verifica que el campo proceso este lleno.'));
					}
					if($id_ally==''){
						$this->Session->setFlash(__('Verifica que el campo aliado este lleno.'));
					}
					if($id_typo==''){
						$this->Session->setFlash(__('Verifica que el campo tipo de población este lleno.'));
					}
				//end de validación de tablas intermedias...						
			}		
			else {
				$this->Session->setFlash(__('The training could not be saved. Please, try again.'));
			}
		
			if ($this->Training->save($data)) {
				$this->Session->setFlash(__('The training has been saved.'));
				return $this->redirect(array('action' => 'index'));
			}
			else
			{
				$this->Session->setFlash(__('The training could not be saved. Please, try again.'));
			}	
		}
		
		$types = $this->Training->TraType->find('list');
		$processes = $this->Training->TraProcess->find('list');
		$TraAllies = $this->Training->TraAlly->find('list');
		$sites = $this->Training->Site->find('list');
		$this->set(compact('types', 'processes','TraAllies','sites'));
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
		$types = $this->Training->Type->find('list');
		$processes = $this->Training->Process->find('list');
		$this->set(compact('types', 'processes'));
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
