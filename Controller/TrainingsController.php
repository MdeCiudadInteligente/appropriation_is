<?php
App::uses('AppController', 'Controller');
/**
 * Trainings Controller
 *
 * @property Training $Training
 * @property PaginatorComponent $Paginator
 */
class TrainingsController extends AppController {

 // var $uses = array('TraProcess','TraAlly','TraType','PerTrainer');
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	protected $codeFirst='FO';

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Training->recursive = 0;
		$this->set('trainings', $this->Paginator->paginate());
	}



	public function index_service()
	{
		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$id_usuario = $this->Session->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
		$db = $this->Training->getDataSource();
		$trainings=$db->fetchAll(
			   "SELECT 
				    t1.*,
				    t2.name AS training_type,
				    (SELECT 
				            GROUP_CONCAT(CONCAT(' ', p.name, ' ', p.lastname, ' '))
				        FROM
				            training_per_trainers tPer,
				            per_trainers per,
				            per_people_type perTy,
				            people p
				        WHERE
				            t1.id = tPer.training_id
				                AND tPer.per_trainer_id = per.id
				                AND per.per_people_type_id = perTy.id
				                AND perTy.person_id = p.id_person) AS formadores,
				    (SELECT 
				            GROUP_CONCAT(CONCAT(' ', site_name, ' '))
				        FROM
				            sites_training st,
				            sites s
				        WHERE
				            t1.id = st.training_id
				                AND st.site_id = s.id_site) AS sitios,
				    (SELECT 
				            GROUP_CONCAT(CONCAT(' ', name, ' '))
				        FROM
				            tra_allies_training ta,
				            tra_allies a
				        WHERE
				            t1.id = ta.training_id
				                AND ta.tra_ally_id = a.id) AS aliados,
				    (SELECT 
				            GROUP_CONCAT(CONCAT(' ', name, ' '))
				        FROM
				            tra_proccesses_training ta,
				            tra_processes a
				        WHERE
				            t1.id = ta.training_id
				                AND ta.process_id = a.id) AS procesos,
				    (SELECT 
				            GROUP_CONCAT(CONCAT(' ', name, ' '))
				        FROM
				            population_types_training ta,
				            population_types a
				        WHERE
				            t1.id = ta.training_id
				                AND ta.population_type_id = a.id_population_type) AS poblacion,
				    t3.username
				FROM
				    training t1,
				    tra_types t2,
				    users t3
				WHERE
				    t1.type_id = t2.id
				        AND t3.id_user = t1.user_id",
			    array('query' => '')
			);
			$count=0;
			foreach ($trainings as $key => $trainer) {
				$data['rows'][$count]=array(
						'id'=>$trainer['t1']['id'],
						'code'=>$trainer['t1']['code'],
						'activity_place'=>$trainer['t1']['activity_place'],
						'description'=>$trainer['t1']['description'],
						'participant_number'=>$trainer['t1']['participant_number'],
						'type_id'=>$trainer['t1']['type_id'],
						'training_type'=>$trainer['t2']['training_type'],
						'formadores'=>$trainer['0']['formadores'],
						'sitios'=>$trainer['0']['sitios'],
						'aliados'=>$trainer['0']['aliados'],
						'procesos'=>$trainer['0']['procesos'],
						'poblacion'=>$trainer['0']['poblacion'],
						'username'=>$trainer['t3']['username'],
						'user_id'=>$trainer['t1']['user_id'],
						'creation_date'=>$trainer['t1']['creation_date'],
						'modification_date'=>$trainer['t1']['modification_date']
				);
				$count++;
			}	
			$this->set(compact('data')); // Pass $data to the view
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
		if (!$this->Training->exists($id)) {
			throw new NotFoundException(__('Invalid training'));
		}
		$options = array('conditions' => array('Training.' . $this->Training->primaryKey => $id));
		$this->set('training', $this->Training->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$usuario = $this->Session->read('Auth.User.id_user');	
			$data=$this->request->data;
      		$args=array(
					'conditions' => array('TraProcess.id' => $data['TraProcess']['TraProcess']),
				    'recursive' => -1,
				    'fields' => array('TraProcess.prefix'),
				    'limit'=>1
	    	);
			$process_prefix=$this->Training->TraProcess->find('list',$args);
			$training_count=$this->Training->find('count');
			$training_count=$training_count+1;
			$pro_prefix=implode($process_prefix,'-');
			$code=$this->codeFirst.$pro_prefix.date('Y').'-'.$training_count;

			//validación de tablas intermedias..				
				$save_switch=true;
	
				if(empty($this->request->data['Site']['Site'])){
					$msg=__('Verifica que el campo sitio este lleno.');
					$save_switch=false;
				}
				if(empty($this->request->data['TraProcess']['TraProcess'])){
					$msg.='<br>'.__('Verifica que el campo proceso este lleno.');
					$save_switch=false;
				}
				if(empty($this->request->data['TraAlly']['TraAlly'])){
					$msg.='<br>'.__('Verifica que el campo aliado este lleno.');
					$save_switch=false;
				}
				if(empty($this->request->data['PopulationType']['PopulationType'])){
					$msg.='<br>'.__('Verifica que el campo tipo de población este lleno.');
					$save_switch=false;
				}
			//end de validación de tablas intermedias...						

			if($data!=''){
				$data['Training']['creation_date']=date('Y-m-d H:i:s');
				$data['Training']['user_id']=$usuario;
				$data['Training']['code']=$code;
				$this->Training->create();

				if($save_switch){
					if ($this->Training->save($data)) {
						$this->Session->setFlash(__('The training has been saved.'));
						return $this->redirect(array('action' => 'index'));
					} else {
						$this->Session->setFlash(__('The training could not be saved. Please, try again.'));
					}
				}else{
						$this->Session->setFlash($msg);			
				}
			}else{
					$this->Session->setFlash(__('The training could not be saved. Please, try again.'));
			}		
		}
		$types = $this->Training->TraType->find('list');
		$this->set(compact('types'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Training->exists($id)) {
			throw new NotFoundException(__('Invalid training'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Training->save($this->request->data)) {
				$this->Session->setFlash(__('The training has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The training could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Training.' . $this->Training->primaryKey => $id));
			$this->request->data = $this->Training->find('first', $options);
		}
		$types = $this->Training->Type->find('list');
		$processes = $this->Training->Process->find('list');
		$this->set(compact('types', 'processes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Training->id = $id;
		if (!$this->Training->exists()) {
			throw new NotFoundException(__('Invalid training'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Training->delete()) {
			$this->Session->setFlash(__('The training has been deleted.'));
		} else {
			$this->Session->setFlash(__('The training could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
