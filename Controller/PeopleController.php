<?php
App::uses('AppController', 'Controller');
/**
 * People Controller
 *
 * @property Person $Person
 * @property PaginatorComponent $Paginator
 */
class PeopleController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','RequestHandler');
	
	public function isAuthorized($user) {
		// Any registered user can access public functions
	
	
		if ((isset($user['permission_level']) && $user['permission_level'] === '2')||(isset($user['permission_level']) && $user['permission_level'] === '1')||(isset($user['permission_level']) && $user['permission_level'] === '3')||(isset($user['permission_level']) && $user['permission_level'] === '4')) {
			return true;
		}
			
	
		// Default deny
		//return false;
			
	}
	 
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Person->recursive = 0;
		$this->set('people', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Person->exists($id)) {
			throw new NotFoundException(__('Invalid person'));
		}
		$options = array('conditions' => array('Person.' . $this->Person->primaryKey => $id));
		$this->set('person', $this->Person->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Person->create();
			$id_persona = $this->request->data['Person']['id_person'];
			$persona_id = $this->Person->find('first', array('conditions'=>array('Person.id_person' => $id_persona)));
			//debug($persona_id);
			//debug($id_persona);
			if($persona_id != array())
			{
				$this->Session->setFlash(__('El documento ya existe.'));
				return $this->redirect(array('controller' => 'people', 'action' => 'add'));
			}
			else 
			if ($this->Person->save($this->request->data)) {
				$this->Session->setFlash(__('The person has been saved.'));				
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The person could not be saved. Please, try again.'));			
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
		$persona_id = $this->Person->MeetingsPerson->find('first', array('conditions'=>array('MeetingsPerson.person_id' => $id)));
		$this->set('persona_id', $persona_id);
		if (!$this->Person->exists($id)) {
			throw new NotFoundException(__('Invalid person'));
		}
		if ($this->request->is(array('post', 'put'))) {
			
			if ($this->Person->save($this->request->data)) {
				//debug($a);
				
				$this->Session->setFlash(__('The person has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The person could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Person.' . $this->Person->primaryKey => $id));
			$this->request->data = $this->Person->find('first', $options);
		
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
		$this->Person->id = $id;
		if (!$this->Person->exists()) {
			throw new NotFoundException(__('Invalid person'));
		}
		$this->request->onlyAllow('post', 'delete');
		
		$persona_id = $this->Person->MeetingsPerson->find('first', array('conditions'=>array('MeetingsPerson.person_id' => $id)));
		if($persona_id!=array()){
			$this->Session->setFlash(__('La persona no se puede eliminar porque se encuentra asociada a una reunión.'));
			return $this->redirect(array('action' => 'index'));
			
		}
			if ($this->Person->delete()) {
				$this->Session->setFlash(__('The person has been deleted.'));
			} else {
				$this->Session->setFlash(__('The person could not be deleted. Please, try again.'));
			}
			return $this->redirect(array('action' => 'index'));	
	}


/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $query
 * @return $array
 */
	public function getPerson() {
	    $this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$queryString=$_GET['q'];
		$condition=array('OR' => array(
				    array('Person.id_person LIKE' => '%'.$queryString.'%'),
				    array('Person.completename LIKE' => '%'.$queryString.'%')
		));

		$person=$this->Person->find('list',array('fields'=>array('Person.id_person','Person.completename'),'order' => array('Person.completename' => 'ASC'),'conditions' => $condition));
		
		foreach ($person as $doc => $completename) {
				$json_data = array();
				$json_data['documento']=$doc;
				$json_data['completename']=$completename;
				$data[]=$json_data;
		}	

		$this->set(compact('data')); // Pass $data to the view
		$this->set('_serialize', 'data'); // Let the JsonView class know what variable to use

	}


}
