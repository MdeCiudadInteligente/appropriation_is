<?php
App::uses('AppController', 'Controller');
/**
 * Neighborhoods Controller
 *
 * @property Neighborhood $Neighborhood
 * @property PaginatorComponent $Paginator
 */
class NeighborhoodsController extends AppController {

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
					'Meeting.id_meeting' => 'desc'
			)
	);
	public function isAuthorized($user) {
		// Any registered user can access public functions
	
	
		if ((isset($user['permission_level']) && $user['permission_level'] == '2')||(isset($user['permission_level']) && $user['permission_level'] == '1')||(isset($user['permission_level']) && $user['permission_level'] == '3')) {
			return true;
		}
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Neighborhood->recursive = 0;
		$this->set('neighborhoods', $this->Paginator->paginate());
	}
	
	public function index_service()
	{
		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$id_usuario = $this->Session->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
		
		$neighborhood=$this->Neighborhood->find('all');
		$count=0;
		foreach ($neighborhood as $key => $neighborhood) {
			$data['rows'][$count]=array(
					'id'=>$neighborhood['Neighborhood']['id_neighborhood'],
					'nombre_barrio'=>$neighborhood['Neighborhood']['neighborhood_name'],
					'id_comuna'=>$neighborhood['Neighborhood']['commune_id'],
					'name_comuna'=>$neighborhood['Commune']['commune_name'],
					//'tipo'=>$neighborhood['Meeting']['meeting_type'],
					//'titulo'=>$neighborhood['Meeting']['meeting_title'],
					//'descripcion'=>$neighborhood['Meeting']['meeting_description'],
					//'compromisos'=>$neighborhood['Meeting']['meeting_commitments'],
					'creation_date'=>$neighborhood['Neighborhood']['creation_date'],
					'modification_date'=>$neighborhood['Neighborhood']['modification_date'],
					'user_id'=>$neighborhood['Neighborhood']['user_id'],
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
		if (!$this->Neighborhood->exists($id)) {
			throw new NotFoundException(__('Invalid neighborhood'));
		}
		$options = array('conditions' => array('Neighborhood.' . $this->Neighborhood->primaryKey => $id));
		$this->set('neighborhood', $this->Neighborhood->find('first', $options));
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
			
			$name_barrio= $this->request->data['Neighborhood']['neighborhood_name'];
			$verificar_barrio=$this->Neighborhood->query("select distinct neighborhood_name from neighborhoods where neighborhood_name = '$name_barrio'");
			$this->set('verificar_barrio',$verificar_barrio);

			if($verificar_barrio==Array( )){				
			
				$this->Neighborhood->create();
				$data=$this->request->data;
				$data['Neighborhood']['creation_date']=date('Y-m-d H:i:s');
				$data['Neighborhood']['user_id']=$usuario;
							
				if ($this->Neighborhood->save($data)) {
						$this->Session->setFlash(__('El barrio se ha guardado.'));
						return $this->redirect(array('action' => 'index'));
				}
				else
				{
					$this->Session->setFlash(__('El barrio no pudo ser salvado.Por favor ,vuelva a intentarlo.'));
				}
			}
			else
			{
				$this->Session->setFlash(__('El barrio ya existe, por favor verifique.'));
			}
		}
		$communes = $this->Neighborhood->Commune->find('list');
		$this->set(compact('communes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Neighborhood->exists($id)) {
			throw new NotFoundException(__('Invalid neighborhood'));
		}
		if ($this->request->is(array('post', 'put'))) {
			
			$name_barrio= $this->request->data['Neighborhood']['neighborhood_name'];
			$verificar_barrio=$this->Neighborhood->query("select distinct neighborhood_name from neighborhoods where neighborhood_name = '$name_barrio'");
			$this->set('verificar_barrio',$verificar_barrio);
			
			if($verificar_barrio==Array( )){
			
			if ($this->Neighborhood->save($this->request->data)) {
				$this->Session->setFlash(__('The neighborhood has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The neighborhood could not be saved. Please, try again.'));
			}
			
			}
			else
			{
				$this->Session->setFlash(__('El barrio ya existe, por favor verifique.'));
			}
		} else {
			$options = array('conditions' => array('Neighborhood.' . $this->Neighborhood->primaryKey => $id));
			$this->request->data = $this->Neighborhood->find('first', $options);
		}
		$communes = $this->Neighborhood->Commune->find('list');
		$this->set(compact('communes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Neighborhood->id = $id;
		if (!$this->Neighborhood->exists()) {
			throw new NotFoundException(__('Invalid neighborhood'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Neighborhood->delete()) {
			$this->Session->setFlash(__('The neighborhood has been deleted.'));
		} else {
			$this->Session->setFlash(__('The neighborhood could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
