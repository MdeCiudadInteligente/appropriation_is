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
	    t1.accompaniment_adjunct AS 'Adjunto1',
	    t1.accompaniment_adjunct1 AS 'Adjunto2',
	    t1.accompaniment_adjunct2 AS 'Adjunto3'
	    FROM
	    accompaniments t1,
	    sites t2,
	    neighborhoods t3,
	    communes t4,
	    acc_types t5
	    
	    WHERE
	    t1.site_id = t2.id_site
		AND t2.neighborhood_id = t3.id_neighborhood
		AND t3.commune_id = t4.id_commune
	    AND t1.accompaniment_type_id = t5.id
	    AND t1.accompaniment_date BETWEEN '2015-04-1' AND '2015-04-30'
	    
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
    	t6.name AS 'Tipo_poblacion',
    	t2.site_name AS Sitio,
    	t3.neighborhood_name AS Barrio,
    	t4.commune_name AS Comuna, 
    
    	(SELECT GROUP_CONCAT(CONCAT(' ', p.name, ' ', p.lastname, ' '))
		FROM
		divulgations_trainers tPer,
		per_trainers per,
		per_people_type perTy,
		people p
		WHERE
		t1.id_divulgation = tPer.divulgation_id
		AND tPer.trainer_id = per.id
		AND per.per_people_type_id = perTy.id
		AND perTy.person_id = p.id_person) AS Formadores,
    
    	(SELECT 
		GROUP_CONCAT(DISTINCT(CONCAT(' ', name, ' ')))
		FROM
		divulgations_thematics dst,
		thematics th
		WHERE
		dst.divulgation_id = t1.id_divulgation
		AND dst.thematic_id= th.id
		) AS Tematicas,
    
    	t1.divulgation_adjunct AS 'Adjunto1',
    	t1.divulgation_adjunct1 AS 'Adjunto2',
    	t1.divulgation_adjunct2 AS 'Adjunto3'
    	FROM divulgations t1,
    	sites t2,
    	neighborhoods t3,
    	communes t4,
    	divtypes t5,
    	population_types t6
    
   	 	WHERE
    	t1.site_id = t2.id_site
    	AND t2.neighborhood_id = t3.id_neighborhood
    	AND t3.commune_id = t4.id_commune
    	AND t1.divulgation_type_id=t5.id
    	AND t1.population_type_id=t6.id_population_type
    	AND t1.divulgation_date BETWEEN '2014-03-1' AND '2015-04-30'
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
    	t1.meeting_adjunct AS 'Adjunto1',
    	t1.meeting_adjunct1 AS 'Adjunto2',
    	t1.meeting_adjunct2 AS 'Adjunto3'
    	FROM
		meetings t1,
    	sites t2,
    	neighborhoods t3,
    	communes t4,
    	mee_types t5
    
    	WHERE
    	t1.site_id = t2.id_site
		AND t2.neighborhood_id = t3.id_neighborhood
		AND t3.commune_id = t4.id_commune
    	AND t1.meeting_type_id=t5.id
    	AND t1.meeting_date BETWEEN '2015-04-1' AND '2015-04-30'
    
    	ORDER BY 
		t1.meeting_date,t5.name
    	");
		$this->request->data["resultm"]=$meetings;
		
		
		$dbt = $this->Meeting->getDataSource();
		$trainings=$dbt->fetchAll("SELECT 
				 	t1.start_date AS Fecha_Inicio,
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
				            GROUP_CONCAT(CONCAT(' ', site_name, ' '))
				        FROM
				            sites_trainings ta,
				            sites a
				        WHERE
				            t1.id = ta.training_id
				                AND ta.site_id = a.id_site) AS Sitio,
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
						AND n.commune_id= c.id_commune limit 1) AS Comuna,
						'' AS 'Adjunto1', 
						'' AS 'Adjunto2', 
						'' AS 'Adjunto3'  
				FROM
				    training t1,
				    tra_types t2,
				    users t3
				WHERE
				    t1.type_id = t2.id
				        AND t3.id_user = t1.user_id
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