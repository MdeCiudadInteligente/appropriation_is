<?php
App::uses('AppController', 'Controller');
/**
 * Thematics Controller
 *
 * @property Thematic $Thematic
 * @property PaginatorComponent $Paginator
 */
class ThematicsController extends AppController {

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
		$this->Thematic->recursive = 0;
		$this->set('thematics', $this->Paginator->paginate());
	}

	
	public function index_service()
	{
		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$id_usuario = $this->Session->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
	
		$thematics=$this->Thematic->find('all',array('conditions'=>array('Thematic.state' => '1')));
		$count=0;
		foreach ($thematics as $key => $thematics) {
			$data['rows'][$count]=array(
					'id'=>$thematics['Thematic']['id'],
					'name'=>$thematics['Thematic']['name'],
					'prefix'=>$thematics['Thematic']['prefix'],
					'description'=>$thematics['Thematic']['description'],
					'state'=>$thematics['Thematic']['state'],					
					'creation_date'=>$thematics['Thematic']['creation_date'],
					'modification_date'=>$thematics['Thematic']['modification_date'],
					'user_id'=>$thematics['Thematic']['user_id'],
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
		if (!$this->Thematic->exists($id)) {
			throw new NotFoundException(__('Invalid thematic'));
		}
		$options = array('conditions' => array('Thematic.' . $this->Thematic->primaryKey => $id));
		$this->set('thematic', $this->Thematic->find('first', $options));
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
			
			$name_thematic= $this->request->data['Thematic']['name'];
			$verificar_thematic=$this->Thematic->query("select distinct name from thematics where name = '$name_thematic'");
			$this->set('verificar_thematic',$verificar_thematic);
				
			if($verificar_thematic==Array( )){
				
				$this->Thematic->create();
					$data=$this->request->data;
					$data['Thematic']['name'] = ucwords($data['Thematic']['name']);				
					$data['Thematic']['creation_date']=date('Y-m-d H:i:s');
					$data['Thematic']['user_id']=$usuario;
			
			if ($this->Thematic->save($data)) {
				$this->Session->setFlash(__('The thematic has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The thematic could not be saved. Please, try again.'));
			}

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
		if (!$this->Thematic->exists($id)) {
			throw new NotFoundException(__('Invalid thematic'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Thematic->save($this->request->data)) {
				$this->Session->setFlash(__('The thematic has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The thematic could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Thematic.' . $this->Thematic->primaryKey => $id));
			$this->request->data = $this->Thematic->find('first', $options);
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
		$this->Thematic->id = $id;
		if (!$this->Thematic->exists()) {
			throw new NotFoundException(__('Invalid thematic'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Thematic->delete()) {
			$this->Session->setFlash(__('The thematic has been deleted.'));
		} else {
			$this->Session->setFlash(__('The thematic could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
