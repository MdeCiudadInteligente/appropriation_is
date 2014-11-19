<?php
App::uses('AppController', 'Controller');
/**
 * Zones Controller
 *
 * @property Zone $Zone
 * @property PaginatorComponent $Paginator
 */
class ZonesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	
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
		$this->Zone->recursive = 0;
		$this->set('zones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Zone->exists($id)) {
			throw new NotFoundException(__('Invalid zone'));
		}
		$options = array('conditions' => array('Zone.' . $this->Zone->primaryKey => $id));
		$this->set('zone', $this->Zone->find('first', $options));
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
			
			$this->Zone->create();
			
			$this->Zone->set(array(
					'creation_date' => $fecha
			));
			$this->Zone->set(array(
					'user_id' => $usuario
			));
			if ($this->Zone->save($this->request->data)) {
				$this->Session->setFlash(__('The zone has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The zone could not be saved. Please, try again.'));
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
		if (!$this->Zone->exists($id)) {
			throw new NotFoundException(__('Invalid zone'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Zone->save($this->request->data)) {
				$this->Session->setFlash(__('The zone has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The zone could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Zone.' . $this->Zone->primaryKey => $id));
			$this->request->data = $this->Zone->find('first', $options);
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
		$this->Zone->id = $id;
		if (!$this->Zone->exists()) {
			throw new NotFoundException(__('Invalid zone'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Zone->delete()) {
			$this->Session->setFlash(__('The zone has been deleted.'));
		} else {
			$this->Session->setFlash(__('The zone could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
