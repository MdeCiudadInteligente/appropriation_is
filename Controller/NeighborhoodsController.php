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
	
	
		if ((isset($user['permission_level']) && $user['permission_level'] === '2')||(isset($user['permission_level']) && $user['permission_level'] === '1')||(isset($user['permission_level']) && $user['permission_level'] === '3')) {
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
				
			$horas_diferencia= -6;
			$tiempo=time() + ($horas_diferencia * 60 *60);
			list($Mili, $bot) = explode(" ", microtime());
			$DM=substr(strval($Mili),2,4);
			$fecha = date('Y-m-d H:i:s:'. $DM,$tiempo);
			$this->set('fecha',$fecha);
			
			$this->Neighborhood->create();
			
			$this->Neighborhood->set(array(
			'creation_date' => $fecha
			));
			$this->Neighborhood->set(array(
			'user_id' => $usuario
			));
			if ($this->Neighborhood->save($this->request->data)) {
				$this->Session->setFlash(__('The neighborhood has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The neighborhood could not be saved. Please, try again.'));
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
			if ($this->Neighborhood->save($this->request->data)) {
				$this->Session->setFlash(__('The neighborhood has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The neighborhood could not be saved. Please, try again.'));
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
