<?php
App::uses('AppController', 'Controller');
/**
 * PerProfessions Controller
 *
 * @property PerProfession $PerProfession
 * @property PaginatorComponent $Paginator
 */
class PerProfessionsController extends AppController {

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
		$this->PerProfession->recursive = 0;
		$this->set('perProfessions', $this->Paginator->paginate());
	}
	
	public function index_service()
	{
		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$id_usuario = $this->Session->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
		$PerProfession=$this->PerProfession->find('all');

		$count=0;
		foreach ($PerProfession as $key => $PerProfession) {
			$data['rows'][$count]=array(
					'id'=>$PerProfession['PerProfession']['id'],
					'nombrep'=>$PerProfession['PerProfession']['name'],
					'estado_p'=>$PerProfession['PerProfession']['state'],
					'creation_date'=>$PerProfession['PerProfession']['creation_date'],
					'modification_date'=>$PerProfession['PerProfession']['modification_date'],
					'user_id'=>$PerProfession['PerProfession']['user_id'],
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
		if (!$this->PerProfession->exists($id)) {
			throw new NotFoundException(__('Invalid profession'));
		}
		$options = array('conditions' => array('PerProfession.' . $this->PerProfession->primaryKey => $id));
		$this->set('perProfession', $this->PerProfession->find('first', $options));
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
				
			$name_perprofessions= $this->request->data['PerProfession']['name'];
			$verificar_perprofessions=$this->PerProfession->query("select distinct name from per_professions where name = '$name_perprofessions'");
			$this->set('verificar_perprofessions',$verificar_perprofessions);
			
			if($verificar_perprofessions==Array( )){
				
				$this->PerProfession->create();
				$data=$this->request->data;
				$data['PerProfession']['name'] = ucwords($data['Divtype']['name']);
				$data['PerProfession']['creation_date']=date('Y-m-d H:i:s');
				$data['PerProfession']['user_id']=$usuario;
				
			
				$this->PerProfession->create();
				if ($this->PerProfession->save($data)) {
					$this->Session->setFlash(__('The profession has been saved.'));
					return $this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The profession could not be saved. Please, try again.'));
				}
			}	
		    else{
					$this->Session->setFlash(__('The profession already exists , please check.'));
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
		if (!$this->PerProfession->exists($id)) {
			throw new NotFoundException(__('Invalid profession'));
		}
		if ($this->request->is(array('post', 'put'))) 
		{
				if ($this->PerProfession->save($this->request->data)) {
					$this->Session->setFlash(__('The profession has been saved.'));
					return $this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The profession could not be saved. Please, try again.'));
				}
		}			
		else 
		{
			$options = array('conditions' => array('PerProfession.' . $this->PerProfession->primaryKey => $id));
			$this->request->data = $this->PerProfession->find('first', $options);
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
		$this->PerProfession->id = $id;
		if (!$this->PerProfession->exists()) {
			throw new NotFoundException(__('Invalid per profession'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PerProfession->delete()) {
			$this->Session->setFlash(__('The profession has been deleted.'));
		} else {
			$this->Session->setFlash(__('The profession could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
