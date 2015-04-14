<?php
App::uses('AppController', 'Controller');
/**
 * PopulationTypes Controller
 *
 * @property PopulationType $PopulationType
 * @property PaginatorComponent $Paginator
 */
class PopulationTypesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	
	public $paginate = array(
			//'fields' => array('Meeting.meeting_type'),
			'limit' => 10,
			'order'=> array(
					'PopulationTypes.id_population_type' => 'desc'
			)
	);
	
	public function isAuthorized($user) {
		// Any registered user can access public functions
	
	
	if ((isset($user['permission_level']) && $user['permission_level'] == '5')||(isset($user['permission_level']) && $user['permission_level'] == '4')||(isset($user['permission_level']) && $user['permission_level'] == '3')||(isset($user['permission_level']) && $user['permission_level'] == '2')||(isset($user['permission_level']) && $user['permission_level'] == '1')) {
			return true;
		}
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PopulationType->recursive = 0;
		$this->set('populationTypes', $this->Paginator->paginate());
	}
	
	public function index_service()
	{
		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$id_usuario = $this->Session->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
		$populationtype=$this->PopulationType->find('all');
		$count=0;
		foreach ($populationtype as $key => $populationtype) {
			$data['rows'][$count]=array(
					'id'=>$populationtype['PopulationType']['id_population_type'],
					'name'=>$populationtype['PopulationType']['name'],					
					'creation_date'=>$populationtype['PopulationType']['creation_date'],
					'modification_date'=>$populationtype['PopulationType']['modification_date'],
					'user_id'=>$populationtype['PopulationType']['user_id'],
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
		if (!$this->PopulationType->exists($id)) {
			throw new NotFoundException(__('Invalid population type'));
		}
		$options = array('conditions' => array('PopulationType.' . $this->PopulationType->primaryKey => $id));
		$this->set('populationType', $this->PopulationType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	/*public function changeuppercase($chanupp)
	{		
		$str = $chanupp;
		$str_devuelta = strtoupper($str);
		return $str_devuelta;
	}*/
	
	public function add() {
		if ($this->request->is('post')) {
			
			$usuario = $this->Session->read('Auth.User.id_user');
			$this->set('usuario',$usuario);
			
			$name_populationtype= $this->request->data['PopulationType']['name'];
			$verificar_populationtype=$this->PopulationType->query("select distinct name from population_types where name = '$name_populationtype'");
			$this->set('verificar_populationtype',$verificar_populationtype);
					
			if($verificar_populationtype==Array( )){			
					
				$this->PopulationType->create();
				$data=$this->request->data;
				$data['PopulationType']['name'] = ucwords($data['PopulationType']['name']);
				$data['PopulationType']['creation_date']=date('Y-m-d H:i:s');
				$data['PopulationType']['user_id']=$usuario;
								
				if ($this->PopulationType->save($data)) {
						$this->Session->setFlash(__('El tipo de población se ha guardado.'));
						return $this->redirect(array('action' => 'index'));
				}
				else
				{
					$this->Session->setFlash(__('El tipo de población no pudo ser salvado.Por favor ,vuelva a intentarlo.'));
				}
			}
			
			else
			{
				$this->Session->setFlash(__('El tipo de población ya existe, por favor verifique.'));
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
		if (!$this->PopulationType->exists($id)) {
			throw new NotFoundException(__('Invalid population type'));
		}
		if ($this->request->is(array('post', 'put'))) 
		{
			$usuario = $this->Session->read('Auth.User.id_user');
			$this->set('usuario',$usuario);
				
			$name_poputype= $this->request->data['PopulationType']['name'];
			$verificar_poputype=$this->PopulationType->query("select distinct name from  population_types where name = '$name_poputype'");
			$this->set('verificar_poputype',$verificar_poputype);
				
			if($verificar_poputype==Array( )){
					
					
				if ($this->PopulationType->save($this->request->data)) {
					$this->Session->setFlash(__('The population type has been saved.'));
					return $this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The population type could not be saved. Please, try again.'));
				}
			}
			else
			{
				$this->Session->setFlash(__('The population type already exists , please check.'));
			}
		}
		else 
		{
			$options = array('conditions' => array('PopulationType.' . $this->PopulationType->primaryKey => $id));
			$this->request->data = $this->PopulationType->find('first', $options);
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
		$this->PopulationType->id = $id;
		if (!$this->PopulationType->exists()) {
			throw new NotFoundException(__('Invalid population type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PopulationType->delete()) {
			$this->Session->setFlash(__('The population type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The population type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	//función para el servicio tipo de población.
	public function getPopulationType() {
		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$queryString=$_GET['q'];
		$condition=array('OR' => array(
				array('PopulationType.name LIKE' => '%'.$queryString.'%')
				//array('Person.completename LIKE' => '%'.$queryString.'%')
		));
		
		$populationtype=$this->PopulationType->find('list',array('fields'=>array('PopulationType.id_population_type','PopulationType.name'),'order' => array('PopulationType.name' => 'ASC'),'conditions' => $condition));
		foreach ($populationtype as $id => $value) {
			
			$json_data = array();
			$json_data['id']=$id;
			$json_data['name']=$value;
			$data[]=$json_data;
		}
	
		$this->set(compact('data')); // Pass $data to the view
		$this->set('_serialize', 'data'); // Let the JsonView class know what variable to use
	
	}
	
}
