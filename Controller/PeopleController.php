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
	
	public $paginate = array(			
			'limit' => 10,
			'order'=> array(
					'Person.id_person' => 'DESC'
			)
	);
	
	public function isAuthorized($user) {
		// Any registered user can access public functions
	
	
		if ((isset($user['permission_level']) && $user['permission_level'] == '2')||(isset($user['permission_level']) && $user['permission_level'] == '1')||(isset($user['permission_level']) && $user['permission_level'] == '3')||(isset($user['permission_level']) && $user['permission_level'] === '4')) {
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
			
			$usuario = $this->Session->read('Auth.User.id_user');
			$this->set('usuario',$usuario);
			
			$document= $this->request->data['Person']['cedula'];
			$verificar_document=$this->Person->query("select distinct cedula from people where cedula = '$document'");
			$this->set('verificar_document',$verificar_document);
			
			if($verificar_document==Array( )){
					
					$this->Person->create();
						$data=$this->request->data;
						$data['Person']['creation_date']=date('Y-m-d H:i:s');
						$data['Person']['user_id']=$usuario;
						
						if ($this->Person->save($data)) {
							$this->Session->setFlash(__('The person has been saved.'));
							return $this->redirect(array('action' => 'index'));
						}
						else
						{
							$this->Session->setFlash(__('The person could not be saved. Please, try again.'));
						}
					}
					else
					{
						$this->Session->setFlash(__('El documento ya existe, por favor verifique.'));
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
		if ($this->request->is(array('post', 'put')))
		{
			
			/*$document= $this->request->data['Person']['cedula'];
			$verificar_document=$this->Person->query("select distinct cedula from people where cedula = '$document'");
			$this->set('verificar_document',$verificar_document);*/
				
			//if($verificar_document==Array( )){
				if ($this->Person->save($this->request->data)) 
				{
					$this->Session->setFlash(__('The person has been saved.'));
					return $this->redirect(array('action' => 'index'));
				} 
				else 
				{
					$this->Session->setFlash(__('The person could not be saved. Please, try again.'));
				}
			}
			/*else
			{
				$this->Session->setFlash(__('El documento ya existe, por favor verifique.'));
			}
		}*/
		else
		{
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
			$this->Session->setFlash(__('La persona no se puede eliminar porque se encuentra asociada a una reuni�n.'));
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
 * Json get Person method
 *
 * @param string $query
 * @return $array
 */
	public function getPerson() {
	    $this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$queryString=$_GET['q'];
		$condition=array('OR' => array(
				    array('Person.cedula LIKE' => '%'.$queryString.'%'),
				    array('Person.completename LIKE' => '%'.$queryString.'%')
		));

		$person=$this->Person->find('list',array('fields'=>array('Person.id_person','Person.completename','Person.cedula'),'order' => array('Person.completename' => 'ASC'),'conditions' => $condition));
		
		foreach ($person as $doc => $dataPerson) {
				$json_data = array();
				$json_data['documento']=$doc;
				$array_keys=array_keys($dataPerson);
				$json_data['id_person']=$array_keys[0];
				$json_data['completename']=$dataPerson[$array_keys[0]];
				$data[]=$json_data;
		}	

		$this->set(compact('data')); // Pass $data to the view
		$this->set('_serialize', 'data'); // Let the JsonView class know what variable to use

	}


}
