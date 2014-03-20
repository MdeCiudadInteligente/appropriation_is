<?php
	App::uses('AppController', 'Controller');
	class ActivitiesController extends AppController {
	
	var $uses = array('Meeting','Agent','Site');	
	public $components = array('Paginator');
   
   	public function index(){
   	
   	//variable designada para meetings...	
   	$meeting=$this->Meeting->find('all');
   	
   	//variable designada para Agents...
   	$agent=$this->Agent->find('all');
   	
   	//variable designada para sites...
   	$site=$this->Site->find('all');
   	
   	//obteniedo los datos que trae la variable $meeting...
   $this->set('meetings', $meeting);
   	
   	//obteniedo los datos que trae la variable $agent...
   	$this->set('agents', $agent);
   	
   	//obteniedo los datos que trae la variable $site...
   	$this->set('sites', $site);
   	
   	
   	//Paginación Meeting...
   	$this->Meeting->recursive = 0;
   	$this->set('meetings', $this->Paginator->paginate());
   	
   	//Paginación Agent...
   	//$this->Agent->recursive = 0;
   	//$this->set('agents', $this->Paginator->paginate());
   	
   	//Paginación Site...
   	//$this->Site->recursive = 0;
   	//$this->set('sites', $this->Paginator->paginate());
   	 
   	
   }
   //funcion para vistas de meeting...
   public function view($id = null)
    {
   		if (!$this->Meeting->exists($id)) 
   		{
   			throw new NotFoundException(__('Invalid meeting'));
   		}
   		$options = array('conditions' => array('Meeting.' . $this->Meeting->primaryKey => $id));
   		$this->set('meeting', $this->Meeting->find('first', $options));
   		
   		//vistas agregar...
   		if (!$this->Agent->exists($id)) {
   			throw new NotFoundException(__('Invalid agent'));
   		}
   		$options = array('conditions' => array('Agent.' . $this->Agent->primaryKey => $id));
   		$this->set('agent', $this->Agent->find('first', $options));
   }
   
   //funcion para agregar datos de meeting...
   public function add() 
   {
   		if ($this->request->is('post')) 	
   		{
   			$this->Meeting->create();
   			if ($this->Meeting->save($this->request->data)) 	
   			{
   				$this->Session->setFlash(__('The meeting has been saved.'));
   				return $this->redirect(array('action' => 'index'));
   			} 
   			else 
   			{
   				$this->Session->setFlash(__('The meeting could not be saved. Please, try again.'));
   			}
   		}
   		$sites = $this->Meeting->Site->find('list');
   		$this->set(compact('sites'));
   		
   		//agregar agentes...
   		if ($this->request->is('post')) {
   			$this->Agent->create();
   			if ($this->Agent->save($this->request->data)) {
   				$this->Session->setFlash(__('The agent has been saved.'));
   				return $this->redirect(array('action' => 'index'));
   			} else {
   				$this->Session->setFlash(__('The agent could not be saved. Please, try again.'));
   			}
   		}
   		$people = $this->Agent->Person->find('list');
   		$zones = $this->Agent->Zone->find('list');
   		$this->set(compact('people', 'zones'));
   }
   
   //funcion para Editar datos de meeting...
   public function edit($id = null) 
   {
   		if (!$this->Meeting->exists($id)) 
   		{
   			throw new NotFoundException(__('Invalid meeting'));
   		}
   		if ($this->request->is(array('post', 'put'))) 
   		{
   			if ($this->Meeting->save($this->request->data)) 
   			{
   				$this->Session->setFlash(__('The meeting has been saved.'));
   				return $this->redirect(array('action' => 'index'));
   			}
   			else 
   			{
   				$this->Session->setFlash(__('The meeting could not be saved. Please, try again.'));
   			}
   		}
   		else 
   		{
   			$options = array('conditions' => array('Meeting.' . $this->Meeting->primaryKey => $id));
   			$this->request->data = $this->Meeting->find('first', $options);
   		}
   		$sites = $this->Meeting->Site->find('list');
   		$this->set(compact('sites'));
   		//Editar Agregar...
   		if (!$this->Agent->exists($id)) {
   			throw new NotFoundException(__('Invalid agent'));
   		}
   		if ($this->request->is(array('post', 'put'))) {
   			if ($this->Agent->save($this->request->data)) {
   				$this->Session->setFlash(__('The agent has been saved.'));
   				return $this->redirect(array('action' => 'index'));
   			} else {
   				$this->Session->setFlash(__('The agent could not be saved. Please, try again.'));
   			}
   		} else {
   			$options = array('conditions' => array('Agent.' . $this->Agent->primaryKey => $id));
   			$this->request->data = $this->Agent->find('first', $options);
   		}
   		$people = $this->Agent->Person->find('list');
   		$zones = $this->Agent->Zone->find('list');
   		$this->set(compact('people', 'zones'));
   }
   
    //funcion para Eliminar datos de meeting...
   public function delete($id = null) 
   {
   		$this->Meeting->id = $id;
   		if (!$this->Meeting->exists()) 
   		{
   			throw new NotFoundException(__('Invalid meeting'));
   		}
   		$this->request->onlyAllow('post', 'delete');
   		if ($this->Meeting->delete()) 
   		{
   			$this->Session->setFlash(__('The meeting has been deleted.'));
   		}
   		else 
   		{
   			$this->Session->setFlash(__('The meeting could not be deleted. Please, try again.'));
   		}
   		return $this->redirect(array('action' => 'index'));
   		//Eliminar Agente...
   		$this->Agent->id = $id;
   		if (!$this->Agent->exists()) {
   			throw new NotFoundException(__('Invalid agent'));
   		}
   		$this->request->onlyAllow('post', 'delete');
   		if ($this->Agent->delete()) {
   			$this->Session->setFlash(__('The agent has been deleted.'));
   		} else {
   			$this->Session->setFlash(__('The agent could not be deleted. Please, try again.'));
   		}
   		return $this->redirect(array('action' => 'index'));
   }
   
  
  
}
   

?>