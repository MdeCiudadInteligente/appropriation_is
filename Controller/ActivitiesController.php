<?php
	App::uses('AppController', 'Controller');
	class ActivitiesController extends AppController {
	
	var $uses = array('Meeting','Accompaniment','Divulgation');	
	
	public $components = array('Paginator');
	
	public $paginate = array(
			//'fields' => array('Meeting.meeting_type'),
			'limit' => 10,
	);
	
	public $helpers = array('Js');
	
	public function isAuthorized($user) {
		// Any registered user can access public functions
	
	
		if ((isset($user['permission_level']) && $user['permission_level'] == '2')||(isset($user['permission_level']) && $user['permission_level'] == '1')||(isset($user['permission_level']) && $user['permission_level'] == '3')||(isset($user['permission_level']) && $user['permission_level'] == '4')) {
			return true;
		}
			
	
		// Default deny
		//return false;
			
	}
   
   	public function index(){
   		$id_usuario = $this->Session->read('Auth.User.id_user');
   		$this->set('id_usuario',$id_usuario);
   		
   		$name_usuario = $this->Session->read('Auth.User.username');
   		$this->set('name_usuario',$name_usuario);
   		
   		//debug($id_usuario);
   		//debug($name_usuario);
   		//$this->Meeting->recursive = -1;
   		//$this->Accompaniments->recursive = -1;
   		//$this->Divulgations->recursive = -1;
   		
   	//variable designada para meetings...	
   	$meeting=$this->Meeting->find('all');
   	
   	//variable designada para Agents...
   	$accompaniment=$this->Accompaniment->find('all');
   	
   	//variable designada para Divulgaciones...
   	$divulgation=$this->Divulgation->find('all');
   	
   	//obteniedo los datos que trae la variable $meeting...
   	$this->set('meetings', $meeting);
   	
   	//obteniedo los datos que trae la variable $accompaniment...
   	$this->set('accompaniments', $accompaniment);
   	
   	//obteniedo los datos que trae la variable $divulgation...
   	$this->set('divulgations', $divulgation);
   	
   	//Se define la configuración del paginador con la variable paginate previamente definida
   	$this->Paginator->settings = $this->paginate;
   	
   	$this->Paginator->options=array(
   			'update' => '#paginador1',
   			'evalScripts' => false
   	);
   	
   	//Paginación Meeting...
   	
   	$this->set('meetings', $this->Paginator->paginate('Meeting'));
     	
   	
   	//Paginación Agent...
   	
   	$this->set('accompaniments', $this->Paginator->paginate('Accompaniment'));
   	
   	//Paginación Site...
   	
   	$this->set('divulgations', $this->Paginator->paginate('Divulgation'));
   	 
   	
   }
      //funcion para vistas de configuration...
	public function configuration()
	{
		$id_usuario = $this->Session->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
    	//$this->Meeting->recursive = -1;
   		//$this->Accompaniments->recursive = -1;
   		//$this->Divulgations->recursive = -1;
   		
   	//variable designada para meetings...	
   	$meeting=$this->Meeting->find('all');
   	
   	//variable designada para Agents...
   	$accompaniment=$this->Accompaniment->find('all');
   	
   	//variable designada para Divulgaciones...
   	$divulgation=$this->Divulgation->find('all');
   	
   	//obteniedo los datos que trae la variable $meeting...
   	$this->set('meetings', $meeting);
   	
   	//obteniedo los datos que trae la variable $accompaniment...
   	$this->set('accompaniments', $accompaniment);
   	
   	//obteniedo los datos que trae la variable $divulgation...
   	$this->set('divulgations', $divulgation);
   	
   	//Se define la configuración del paginador con la variable paginate previamente definida
   	$this->Paginator->settings = $this->paginate;
   	
   	$this->Paginator->options=array(
   			'update' => '#paginador1',
   			'evalScripts' => false
   	);
   	
   	//Paginación Meeting...
   	
   	$this->set('meetings', $this->Paginator->paginate('Meeting'));
     	
   	
   	//Paginación Agent...
   	
   	$this->set('accompaniments', $this->Paginator->paginate('Accompaniment'));
   	
   	//Paginación Site...
   	
   	$this->set('divulgations', $this->Paginator->paginate('Divulgation'));
   	 
   	
   }


}
   

?>