<?php
App::uses('AppController', 'Controller');
/**
 * People Controller
 *
 * @property Person $Person
 * @property PaginatorComponent $Paginator
 */
class PeopleController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','RequestHandler');
	
	public $paginate = array(			
			'limit' => 10,
			'order'=> array(
					'Person.id_person' => 'DESC'
			)
	);
	
	public function isAuthorized($user) {
		// Any registered user can access public functions
		if ((isset($user['permission_level']) && $user['permission_level'] == '5')||(isset($user['permission_level']) && $user['permission_level'] == '4')||(isset($user['permission_level']) && $user['permission_level'] == '3')||(isset($user['permission_level']) && $user['permission_level'] == '2')||(isset($user['permission_level']) && $user['permission_level'] == '1')) {
			return true;
		}
	
		// Default deny
		//return false;
	}
	 
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Person->recursive = 0;
		$this->set('people', $this->Paginator->paginate());
	}

	public function index_service()
	{
		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$id_usuario = $this->Session->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
		$document_type_list=$GLOBALS['STATIC_LIST_ARRAY']['document_type'];
		$people=$this->Person->find('all');
		$count=0;
		foreach ($people as $key => $people) {
			$document_type=($people['Person']['document_type']==0)?'No asignado':$GLOBALS['STATIC_LIST_ARRAY']['document_type'][$people['Person']['document_type']];
			$data['rows'][$count]=array(
					'id'=>$people['Person']['id_person'],
					'document_type'=>$document_type,
					'cedula'=>$people['Person']['cedula'],
					'nombre'=>$people['Person']['name'],
					'apellido'=>$people['Person']['lastname'],
					'cargo'=>$people['Person']['charge'],
					'correo'=>$people['Person']['email'],
					'telefono'=>$people['Person']['phone'],
					'celular'=>$people['Person']['cell'],
					'entidad'=>$people['Person']['entity'],
					'creation_date'=>$people['Person']['creation_date'],
					'modification_date'=>$people['Person']['modification_date'],
					'user_id'=>$people['Person']['user_id']
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
		if (!$this->Person->exists($id)) {
			throw new NotFoundException(__('Invalid person'));
		}
		$options = array('conditions' => array('Person.' . $this->Person->primaryKey => $id));
		$this->set('person', $this->Person->find('first', $options));
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
			
			$document= $this->request->data['Person']['cedula'];
			$verificar_document=$this->Person->query("select distinct cedula from people where cedula = '$document'");
			$this->set('verificar_document',$verificar_document);
			
			if($verificar_document==Array( )){
					
					$this->Person->create();
						$data=$this->request->data;
						$data['Person']['name'] = ucwords($data['Person']['name']);
						$data['Person']['lastname'] = ucwords($data['Person']['lastname']);
						$data['Person']['charge'] = ucwords($data['Person']['charge']);
						$data['Person']['entity'] = ucwords($data['Person']['entity']);
						$data['Person']['creation_date']=date('Y-m-d H:i:s');
						$data['Person']['user_id']=$usuario;

						if(empty($data['Person']['terms']))
						{
							$data['Person']['terms']=0;	
						}
						else{
							$data['Person']['terms']=1;	
						}

						
						if ($this->Person->save($data)) {
							$this->Session->setFlash(__('The person has been saved.'));
							return $this->redirect(array('action' => 'index'));
						}
						else
						{
							$this->Session->setFlash(__('The person could not be saved. Please, try again.'));
						}
					}
					else
					{
						$this->Session->setFlash(__('The document already exists , please check.'));
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
		if (!$this->Person->exists($id)) {
			throw new NotFoundException(__('Invalid person'));
		}
		if ($this->request->is(array('post', 'put')))
		{
					$data=$this->request->data;

					if(empty($data['Person']['terms']))
					{
						$data['Person']['terms']=0;	
					}
					else{
						$data['Person']['terms']=1;	
					}

					if ($this->Person->save($data)) 
					{
						$this->Session->setFlash(__('The person has been saved.'));
						return $this->redirect(array('action' => 'index'));
					} 
					else 
					{
						$this->Session->setFlash(__('The person could not be saved. Please, try again.'));
					}
		}
		else
		{
			$options = array('conditions' => array('Person.' . $this->Person->primaryKey => $id));
			$this->request->data = $this->Person->find('first', $options);		
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
		$this->Person->id = $id;
		if (!$this->Person->exists()) {
			throw new NotFoundException(__('Invalid person'));
		}
		$this->request->onlyAllow('post', 'delete');
		
		$persona_id = $this->Person->MeetingsPerson->find('first', array('conditions'=>array('MeetingsPerson.person_id' => $id)));
		if($persona_id!=array()){
			$this->Session->setFlash(__('The person can not be deleted because it is associated to a meeting.'));
			return $this->redirect(array('action' => 'index'));
			
		}
			if ($this->Person->delete()) {
				$this->Session->setFlash(__('The person has been deleted.'));
			} else {
				$this->Session->setFlash(__('The person could not be deleted. Please, try again.'));
			}
			return $this->redirect(array('action' => 'index'));	
	}


/**
 * Json get Person method
 *
 * @param string $query
 * @return $array
 */
	public function getPerson() {
	    $this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$queryString=$_GET['q'];
		$condition=array('OR' => array(
				    array('Person.cedula LIKE' => '%'.$queryString.'%'),
				    array('Person.completename LIKE' => '%'.$queryString.'%')
		));

		$person=$this->Person->find('list',array('fields'=>array('Person.id_person','Person.completename','Person.cedula'),'order' => array('Person.completename' => 'ASC'),'conditions' => $condition));
		
		foreach ($person as $doc => $dataPerson) {
				$json_data = array();
				$json_data['documento']=$doc;
				$array_keys=array_keys($dataPerson);
				$json_data['id_person']=$array_keys[0];
				$json_data['completename']=$dataPerson[$array_keys[0]];
				$data[]=$json_data;
		}	

		$this->set(compact('data')); // Pass $data to the view
		$this->set('_serialize', 'data'); // Let the JsonView class know what variable to use

	}

	
	public function download_all()
	{
		$db = $this->Person->getDataSource();
		$data=$db->fetchAll("SELECT 
		    t1.id_person,
		    (CASE  t1.document_type
				WHEN '1' THEN 'Cédula de ciudadanía'
		        WHEN '2' THEN 'Tarjeta de identidad'
		        WHEN '3' THEN 'Cédula de extranjería'
		        WHEN '4' THEN 'Pasaporte'
		        WHEN '5' THEN 'Registro civil'
		        END
		    ) as 'Tipo de documento',
		    t1.cedula as 'Número de documento',
		    t1.name as 'Nombre',
		    t1.lastname as 'Apellido',
		    t1.charge as 'Cargo',
		    t1.email as 'Email',
		    t1.phone as 'Telefono',
		    t1.cell AS 'Celular',
		    t1.entity AS Entidad,
		    t1.birthday as 'Fecha de Nacimiento',
		    t1.economic_level as 'Estrato',
		    (IFNULL(t8.name,'Persona')) AS 'Rol',
		    (CASE t1.genre
		        WHEN '1' THEN 'Femenino'
		        WHEN '2' THEN 'Masculino'
		        WHEN '3' THEN 'Lesbiana'
		        WHEN '4' THEN 'Gay'
		        WHEN '5' THEN 'Transexual'
		        WHEN '6' THEN 'Bisexual'
		        WHEN '7' THEN 'Intersexual'
		    END) AS Genero,
		    (SELECT GROUP_CONCAT(pt.name) FROM per_participants_population_types pp, population_types pt WHERE pp.participant_id=t3.id AND pp.population_type_id=pt.id_population_type)  as 'Tipo de Población',
		    t3.other_population_type as 'Otro tipo de poblacion',
		    t4.neighborhood_name as 'Barrio',
		    t5.commune_name as 'Comuna',
		    t6.name as 'Estado Civil',
		    t7.name as 'Escolaridad',
		    t1.creation_date as 'Fecha de registro',
		    t9.username as 'Usuario Registro'
		FROM
		    people t1
		        LEFT JOIN
		    per_people_type t2 ON t1.id_person = t2.person_id
		        LEFT JOIN
		    per_participants t3 ON t2.id = t3.per_people_type_id
				LEFT JOIN  
		    neighborhoods t4 ON t3.neighborhood_id=t4.id_neighborhood
				LEFT JOIN 
		    communes t5 ON t4.commune_id=t5.id_commune
				LEFT JOIN 
		    per_marital_status t6 ON t3.marital_status_id=t6.id
				LEFT JOIN 
		    per_school_level t7 ON t3.school_level_id=t7.id
				LEFT JOIN 
		    per_types t8 ON t2.per_type_id=t8.id    
				LEFT JOIN 
		    users t9 ON t1.user_id=t9.id_user
	    ");

		//Example define custom Headers
			$customHeaders=array(
				'id_person'=>'id_person',
				'Tipo de documento'=>'Tipo de documento',
				'Número de documento'=>'Número de documento',
				'Nombre'=>'Nombre',
				'Apellido'=>'Apellido',
				'Cargo'=>'Cargo',
				'Email'=>'Email',
				'Telefono'=>'Telefono',
				'Celular'=>'Celular',
				'Entidad'=>'Entidad',
				'Fecha de Nacimiento'=>'Fecha de Nacimiento',
				'Estrato'=>'Estrato',
				'Rol'=>'Rol',
				'Genero'=>'Genero',
				'Tipo de Población'=>'Tipo de Población',
				'Otro tipo de poblacion'=>'Otro tipo de poblacion',
				'Barrio'=>'Barrio',
				'Comuna'=>'Comuna',
				'Estado Civil'=>'Estado Civil',
				'Escolaridad'=>'Escolaridad',
				'Fecha de registro'=>'Fecha de registro',
				'Usuario Registro'=>'Usuario Registro'
			);

		$autoHeadersControl=false;
		$date=date('d-m-y');
		$filename='Personas_gen'.$date;
		///Config::Bootsrap function--- Fetch model data into a csv structured array 
		$preparedData=csv_fetch_data($data,$filename,$autoHeadersControl,$customHeaders);
		$this->request->data=array_merge($this->request->data,$preparedData);
		$this->layout = null;
		$this -> render('/Reports/download');

	}

	public function download_participants_formation()
	{
		$db = $this->Person->getDataSource();
		$data=$db->fetchAll("SELECT 
			    t1.id_person,
			    (CASE  t1.document_type
					WHEN '1' THEN 'Cédula de ciudadanía'
			        WHEN '2' THEN 'Tarjeta de identidad'
			        WHEN '3' THEN 'Cédula de extranjería'
			        WHEN '4' THEN 'Pasaporte'
			        WHEN '5' THEN 'Registro civil'
			        END
			    ) as 'Tipo de documento',
			    t1.cedula as 'Número de documento',
			    t1.name as 'Nombre',
			    t1.lastname as 'Apellido',
			    t1.charge as 'Cargo',
			    t1.email as 'Email',
			    t1.phone as 'Telefono',
			    t1.cell AS 'Celular',
			    t1.entity AS Entidad,
			    t1.birthday as 'Fecha de Nacimiento',
			    t1.economic_level as 'Estrato',
			    (IFNULL(t8.name,'Persona')) AS 'Rol',
			    (CASE t1.genre
			        WHEN '1' THEN 'Femenino'
			        WHEN '2' THEN 'Masculino'
			        WHEN '3' THEN 'Lesbiana'
			        WHEN '4' THEN 'Gay'
			        WHEN '5' THEN 'Transexual'
			        WHEN '6' THEN 'Bisexual'
			        WHEN '7' THEN 'Intersexual'
			    END) AS Genero,
			    (SELECT GROUP_CONCAT(pt.name) FROM per_participants_population_types pp, population_types pt WHERE pp.participant_id=t3.id AND pp.population_type_id=pt.id_population_type)  as 'Tipo de Población',
			    t3.other_population_type as 'Otro tipo de poblacion',
			    t4.neighborhood_name as 'Barrio',
			    t5.commune_name as 'Comuna',
			    t6.name as 'Estado Civil',
			    t7.name as 'Escolaridad',
			    t10.code as 'Formación',
			    t10.description as 'Descripción',
			    t11.name as 'Tipo de Formación',
			    t10.start_date as 'Fecha de inicio (Formacion)',
			    t10.end_date as 'Fecha de Terminacion (Formacion)',    
			    (CASE t10.current_state WHEN '1' THEN 'En Curso' WHEN '2' THEN 'Finalizada' END) as 'Estado (Formación)'

			FROM
			    people t1
			        LEFT JOIN
			    per_people_type t2 ON t1.id_person = t2.person_id
			        LEFT JOIN
			    per_participants t3 ON t2.id = t3.per_people_type_id
					LEFT JOIN  
			    neighborhoods t4 ON t3.neighborhood_id=t4.id_neighborhood
					LEFT JOIN 
			    communes t5 ON t4.commune_id=t5.id_commune
					LEFT JOIN 
			    per_marital_status t6 ON t3.marital_status_id=t6.id
					LEFT JOIN 
			    per_school_level t7 ON t3.school_level_id=t7.id
					LEFT JOIN 
			    per_types t8 ON t2.per_type_id=t8.id
					LEFT JOIN 
			    per_participants_training t9 ON t3.id=t9.participant_id 
					LEFT JOIN 
			    training t10 ON  t9.training_id=t10.id
					LEFT JOIN 
			    tra_types t11 ON t10.type_id=t11.id  
			   
			    
			WHERE t2.per_type_id=2    
			AND   t10.code IS NOT NULL
	    ");

		$autoHeadersControl=true;
		$date=date('d-m-y');
			$filename='participantes_fomaciones_gen'.$date;
			///Config::Bootsrap function--- Fetch model data into a csv structured array 
		$preparedData=csv_fetch_data($data,$filename,$autoHeadersControl,$customHeaders=array());
		$this->request->data=array_merge($this->request->data,$preparedData);
		$this->layout = null;
		$this -> render('/Reports/download');

	}

	public function download_trainers_formation()
	{
		$db = $this->Person->getDataSource();
		$data=$db->fetchAll("SELECT 
			    t1.id_person,
			    (CASE  t1.document_type
					WHEN '1' THEN 'Cédula de ciudadanía'
			        WHEN '2' THEN 'Tarjeta de identidad'
			        WHEN '3' THEN 'Cédula de extranjería'
			        WHEN '4' THEN 'Pasaporte'
			        WHEN '5' THEN 'Registro civil'
			        END
			    ) as 'Tipo de documento',
			    t1.cedula as 'Número de documento',
			    t1.name as 'Nombre',
			    t1.lastname as 'Apellido',
			    t1.charge as 'Cargo',
			    t1.email as 'Email',
			    t1.phone as 'Telefono',
			    t1.cell AS 'Celular',
			    t1.entity AS Entidad,
			    t1.birthday as 'Fecha de Nacimiento',
			    t1.economic_level as 'Estrato',
			    (IFNULL(t3.name,'Persona')) AS 'Rol',
			    (CASE t1.genre
			        WHEN '1' THEN 'Femenino'
			        WHEN '2' THEN 'Masculino'
			        WHEN '3' THEN 'Lesbiana'
			        WHEN '4' THEN 'Gay'
			        WHEN '5' THEN 'Transexual'
			        WHEN '6' THEN 'Bisexual'
			        WHEN '7' THEN 'Intersexual'
			    END) AS Genero,
			    tt.name as 'Tipo de Formador',
			    pro.name as 'Profesion',
			    tf.name as 'Fondo',
			    t5.code as 'Formación',
			    t5.description as 'Descripción',
			    t6.name as 'Tipo de Formación',
			    t5.start_date as 'Fecha de inicio (Formacion)',
			    t5.end_date as 'Fecha de Terminacion (Formacion)',    
			    (CASE t5.current_state WHEN '1' THEN 'En Curso' WHEN '2' THEN 'Finalizada' END) as 'Estado (Formación)'

			FROM
			    people t1
			        LEFT JOIN
			    per_people_type t2 ON t1.id_person = t2.person_id
					LEFT JOIN 
			    per_types t3 ON t2.per_type_id=t3.id
					LEFT JOIN 
			    per_trainers tr ON tr.per_people_type_id=t2.id    
			        LEFT JOIN
			    per_trainer_types tt ON tr.per_trainer_type_id=tt.id
					LEFT JOIN
			    per_professions pro ON tr.per_profession_id=pro.id
					LEFT JOIN
			    per_trainer_funds tf ON tr.per_trainer_fund_id=tf.id 
					LEFT JOIN 
				training_per_trainers t4 ON t4.per_trainer_id=tr.id
					LEFT JOIN
			    training t5 ON  t4.training_id=t5.id
					LEFT JOIN 
			    tra_types t6 ON t5.type_id=t6.id 
			    
			WHERE t3.id=1    
	    ");
		$autoHeadersControl=true;
		$date=date('d-m-y');
			$filename='Formadores_con_formaciones_gen'.$date;
			///Config::Bootsrap function--- Fetch model data into a csv structured array 
		$preparedData=csv_fetch_data($data,$filename,$autoHeadersControl,$customHeaders=array());
		$this->request->data=array_merge($this->request->data,$preparedData);
		$this->layout = null;
		$this -> render('/Reports/download');
	}


	public function download_trainers_formation_single()
	{
		$db = $this->Person->getDataSource();
		$data=$db->fetchAll("SELECT 
			    t1.id_person,
			    (CASE  t1.document_type
					WHEN '1' THEN 'Cédula de ciudadanía'
			        WHEN '2' THEN 'Tarjeta de identidad'
			        WHEN '3' THEN 'Cédula de extranjería'
			        WHEN '4' THEN 'Pasaporte'
			        WHEN '5' THEN 'Registro civil'
			        END
			    ) as 'Tipo de documento',
			    t1.cedula as 'Número de documento',
			    t1.name as 'Nombre',
			    t1.lastname as 'Apellido',
			    t1.charge as 'Cargo',
			    t1.email as 'Email',
			    t1.phone as 'Telefono',
			    t1.cell AS 'Celular',
			    t1.entity AS Entidad,
			    t1.birthday as 'Fecha de Nacimiento',
			    t1.economic_level as 'Estrato',
			    (IFNULL(t3.name,'Persona')) AS 'Rol',
			    (CASE t1.genre
			        WHEN '1' THEN 'Femenino'
			        WHEN '2' THEN 'Masculino'
			        WHEN '3' THEN 'Lesbiana'
			        WHEN '4' THEN 'Gay'
			        WHEN '5' THEN 'Transexual'
			        WHEN '6' THEN 'Bisexual'
			        WHEN '7' THEN 'Intersexual'
			    END) AS Genero,
			    tt.name as 'Tipo de Formador',
			    pro.name as 'Profesion',
			    tf.name as 'Fondo',
			    t5.code as 'Formación',
			    t5.description as 'Descripción',
			    t6.name as 'Tipo de Formación',
			    t5.start_date as 'Fecha de inicio (Formacion)',
			    t5.end_date as 'Fecha de Terminacion (Formacion)',    
			    (CASE t5.current_state WHEN '1' THEN 'En Curso' WHEN '2' THEN 'Finalizada' END) as 'Estado (Formación)'

			FROM
			    people t1
			        LEFT JOIN
			    per_people_type t2 ON t1.id_person = t2.person_id
					LEFT JOIN 
			    per_types t3 ON t2.per_type_id=t3.id
					LEFT JOIN 
			    per_trainers tr ON tr.per_people_type_id=t2.id    
			        LEFT JOIN
			    per_trainer_types tt ON tr.per_trainer_type_id=tt.id
					LEFT JOIN
			    per_professions pro ON tr.per_profession_id=pro.id
					LEFT JOIN
			    per_trainer_funds tf ON tr.per_trainer_fund_id=tf.id 
					LEFT JOIN 
				training_per_trainers t4 ON t4.per_trainer_id=tr.id
					LEFT JOIN
			    training t5 ON  t4.training_id=t5.id
					LEFT JOIN 
			    tra_types t6 ON t5.type_id=t6.id 
			    
			WHERE t3.id=1    
			GROUP BY t1.id_person
	    ");
		$autoHeadersControl=true;
		$date=date('d-m-y');
			$filename='Formadores_gen'.$date;
			///Config::Bootsrap function--- Fetch model data into a csv structured array 
		$preparedData=csv_fetch_data($data,$filename,$autoHeadersControl,$customHeaders=array());
		$this->request->data=array_merge($this->request->data,$preparedData);
		$this->layout = null;
		$this -> render('/Reports/download');
	}


}
