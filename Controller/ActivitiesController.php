<?php
	
	App::uses('AppController', 'Controller');
	class ActivitiesController extends AppController {
	
	var $uses = array('Meeting','Accompaniment','Divulgation');	
	var $helpers = array('Html','Form','Csv','Js');
	
	public $components = array('Paginator');
	
	public $paginate = array(
			//'fields' => array('Meeting.meeting_type'),
			'limit' => 10,
	);
	

	
	public function isAuthorized($user) {
		// Any registered user can access public functions
	
	
	if ((isset($user['permission_level']) && $user['permission_level'] == '1')||(isset($user['permission_level']) && $user['permission_level'] == '2')||(isset($user['permission_level']) && $user['permission_level'] == '3')||(isset($user['permission_level']) && $user['permission_level'] == '4')||(isset($user['permission_level']) && $user['permission_level'] == '5')) {
			return true;
		}	
			
	
		// Default deny
		//return false;
			
	}
	
	
	public function download()
	{

    $start_date=$this->request->data['start_date'];
    $end_date=$this->request->data['end_date'];

    if($start_date&&$end_date){
      $accompaniments_cond="AND t1.accompaniment_date BETWEEN '".$start_date."' AND '".$end_date."'";
      $divulgations_cond="AND t1.divulgation_date BETWEEN '".$start_date."' AND '".$end_date."'";
      $meetiings_cond="AND t1.meeting_date BETWEEN '".$start_date."' AND '".$end_date."'";
      $trainings_cond="AND t1.end_date BETWEEN '".$start_date."' AND '".$end_date."'";
    }else{
      $accompaniments_cond="";
      $divulgations_cond="";
      $meetiings_cond="";
      $trainings_cond="";
    }


		$db = $this->Accompaniment->getDataSource();
		$accompaniments=$db->fetchAll("SELECT 
      t1.accompaniment_date AS Fecha,
      'Acompañamiento' AS 'Tipo_actividad',
      t5.name AS 'Tipo',
      t1.accompaniment_title AS 'Titulo',
      t1.accompaniment_description AS 'Descripcion',
      t1.participant_number AS 'numero_participantes',
      t2.site_name AS Sitio,
      t3.neighborhood_name AS Barrio,
      t4.commune_name AS Comuna,
        t6.site_type AS 'tipo_sitio'
      FROM
      accompaniments t1,
      sites t2,
      neighborhoods t3,
      communes t4,
      acc_types t5,
        site_types t6
      WHERE
      t1.site_id = t2.id_site
      AND t2.neighborhood_id = t3.id_neighborhood
      AND t3.commune_id = t4.id_commune
      AND t1.accompaniment_type_id = t5.id
        AND t2.site_type_id=t6.id_site_type
        ".$accompaniments_cond."
      ORDER BY 
    t1.accompaniment_date,t5.name
    	");
		$this->request->data["result"]=$accompaniments;
		
		$dbd = $this->Divulgation->getDataSource();
		$divulgations=$dbd->fetchAll("SELECT t1.divulgation_date AS Fecha, 
      'Sensibilizacion' AS 'Tipo_actividad',
      t5.name AS 'Tipo',
      t1.divulgation_name AS 'Titulo',
      t1.divulgation_description AS 'Descripcion',
      t1.participant_number AS 'numero_participantes',
      t2.site_name AS Sitio,
      t3.neighborhood_name AS Barrio,
      t4.commune_name AS Comuna,
        t6.site_type AS 'tipo_sitio' 

      FROM divulgations t1,
      sites t2,
      neighborhoods t3,
      communes t4,
      divtypes t5,
        site_types t6
      WHERE
      t1.site_id = t2.id_site
      AND t2.neighborhood_id = t3.id_neighborhood
      AND t3.commune_id = t4.id_commune
      AND t1.divulgation_type_id=t5.id
        AND t2.site_type_id=t6.id_site_type
        ".$divulgations_cond."
      ORDER BY 
    t1.divulgation_date,t5.name
    	");
		$this->request->data["results"]=$divulgations;
		
		$dbm = $this->Meeting->getDataSource();
		$meetings=$dbm->fetchAll("SELECT 
      t1.meeting_date AS Fecha,
      'Reunion' AS 'Tipo_actividad',
      t5.name AS 'Tipo',
      t1.meeting_title AS 'Titulo',
      t1.meeting_description AS 'Descripcion',
      (SELECT COUNT(t20.meeting_id) FROM meetings_people t20 WHERE t20.meeting_id=t1.id_meeting ) AS 'numero_participantes',
      'Finalizado' AS 'Estado_Actual',
      t2.site_name AS Sitio,
      t3.neighborhood_name AS Barrio,
      t4.commune_name AS Comuna,
        t6.site_type AS 'tipo_sitio' 
      FROM
    meetings t1,
      sites t2,
      neighborhoods t3,
      communes t4,
      mee_types t5,
        site_types t6
    
      WHERE
      t1.site_id = t2.id_site
        AND t2.neighborhood_id = t3.id_neighborhood
        AND t3.commune_id = t4.id_commune
        AND t1.meeting_type_id=t5.id
        AND t2.site_type_id=t6.id_site_type
        ".$meetiings_cond."
      ORDER BY 
    t1.meeting_date,t5.name
    	");
		$this->request->data["resultm"]=$meetings;
		
		
		$dbt = $this->Meeting->getDataSource();
		$trainings=$dbt->fetchAll("SELECT 
          t1.start_date AS Fecha_Inicio,
				 	t1.end_date AS Fecha_Final,
					'Formacion' AS 'Tipo_actividad',
					t2.name AS Tipo, 
					t1.code AS Titulo,
					t1.description AS Descripcion,
					(SELECT COUNT(t20.training_id) FROM per_participants_training t20 WHERE t20.training_id=t1.id ) AS 'numero_participantes',
						CASE t1.current_state
						WHEN t1.current_state='1' THEN 'En curso'
						ELSE 'Finalizado' 
						END AS Estado_Actual,
            (SELECT 
                    st.site_type
                FROM
                    sites_trainings ta,
                    sites a,
                    site_types st
                WHERE
                    t1.id = ta.training_id
                        AND ta.site_id = a.id_site
                        AND a.site_type_id=st.id_site_type
                LIMIT 1 ) AS tipo_sitio,
            (SELECT 
                    site_name
                FROM
                    sites_trainings ta,
                    sites a
                WHERE
                    t1.id = ta.training_id
                        AND ta.site_id = a.id_site
                LIMIT 1 ) AS Sitio,
						(SELECT 
						neighborhood_name
						FROM
						sites_trainings ta,
						neighborhoods n,
						sites a
						WHERE
						t1.id = ta.training_id
						AND ta.site_id = a.id_site
						AND a.neighborhood_id = n.id_neighborhood limit 1) AS Barrio, 
				        (SELECT 
						commune_name
						FROM
						sites_trainings ta,
						neighborhoods n,
						communes c,
						sites a
						WHERE
						t1.id = ta.training_id
						AND ta.site_id = a.id_site
						AND a.neighborhood_id = n.id_neighborhood 
						AND n.commune_id= c.id_commune limit 1) AS Comuna
				FROM
				    training t1,
				    tra_types t2,
				    users t3
				WHERE
				    t1.type_id = t2.id
				        AND t3.id_user = t1.user_id
                ".$trainings_cond." 
                ORDER BY 
				t1.code,t1.start_date
				
    	");
		$this->request->data["resultt"]=$trainings;
	
		$this->layout = null;
		//$this->autoLayout = false;
		//Configure::write('debug', '0');
	
	}
	
   
   	public function index(){
   		$id_usuario = $this->Session->read('Auth.User.id_user');
   		$this->set('id_usuario',$id_usuario);
   		
   		$name_usuario = $this->Session->read('Auth.User.username');
   		$this->set('name_usuario',$name_usuario);
   		
   		
   		if ($this->request->is('post')) {
   			return $this->redirect(array('action' => 'download'));
   		}
   		
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