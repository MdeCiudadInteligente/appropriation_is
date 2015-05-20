<?php
App::uses('AppController', 'Controller');
/**
 * PerSchoolLevels Controller
 *
 * @property PerSchoolLevel $PerSchoolLevel
 * @property PaginatorComponent $Paginator
 */
class PerSchoolLevelsController extends AppController {

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
		$this->PerSchoolLevel->recursive = 0;
		$this->set('perSchoolLevels', $this->Paginator->paginate());
	}
	
	
    public function index_service()
	{
		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$id_usuario = $this->Session->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
		$SchoolLevel=$this->PerSchoolLevel->find('all');
	
		$count=0;
		foreach ($SchoolLevel as $key => $SchoolLevel) {
			$data['rows'][$count]=array(
					'id'=>$SchoolLevel['PerSchoolLevel']['id'],
					'name'=>$SchoolLevel['PerSchoolLevel']['name'],
					'creation_date'=>$SchoolLevel['PerSchoolLevel']['creation_date'],
					'modification_date'=>$SchoolLevel['PerSchoolLevel']['modification_date'],
					'user_id'=>$SchoolLevel['PerSchoolLevel']['user_id'],
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
		if (!$this->PerSchoolLevel->exists($id)) {
			throw new NotFoundException(__('Invalid school level'));
		}
		$options = array('conditions' => array('PerSchoolLevel.' . $this->PerSchoolLevel->primaryKey => $id));
		$this->set('perSchoolLevel', $this->PerSchoolLevel->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PerSchoolLevel->create();
			if ($this->PerSchoolLevel->save($this->request->data)) {
				$this->Session->setFlash(__('The school level has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The school level could not be saved. Please, try again.'));
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
		if (!$this->PerSchoolLevel->exists($id)) {
			throw new NotFoundException(__('Invalid school level'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PerSchoolLevel->save($this->request->data)) {
				$this->Session->setFlash(__('The school level has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The school level could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PerSchoolLevel.' . $this->PerSchoolLevel->primaryKey => $id));
			$this->request->data = $this->PerSchoolLevel->find('first', $options);
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
		$this->PerSchoolLevel->id = $id;
		if (!$this->PerSchoolLevel->exists()) {
			throw new NotFoundException(__('Invalid per school level'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PerSchoolLevel->delete()) {
			$this->Session->setFlash(__('The school level has been deleted.'));
		} else {
			$this->Session->setFlash(__('The school level could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
