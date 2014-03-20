<?php
App::uses('AppController', 'Controller');
class ActivitiesController extends AppController {
	
	var $uses = array('Meeting');
	public $components = array('Paginator');
   
   public function index(){
   	  	
   	$this->Meeting->recursive = 0;
   	$this->set('meetings', $this->Paginator->paginate());
   
   	
   	
   }
   
}
?>