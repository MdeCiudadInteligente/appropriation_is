<?php
App::uses('TrainingsController', 'Controller');

/**
 * TrainingsController Test Case
 *
 */
class TrainingsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.training',
		'app.tratype',
		'app.traprocess'
	);
	

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		$result = $this->testAction('/Trainings/index', array('return'=>'vars'));
		$this->assertEquals($result['trainings'][0]['Training']['code'], 'Lorem ipsum dolor sit amet');
		debug($result['trainings'][0]);
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
			
		$data=array(
				'as_values_097' => 'Prueba Nombre Proceso Dos,',
				'as_values_00' => 'Prueba Aliado1,',
				'as_values_019' => 'Víctimas del conflicto',
				'as_values_046' => '10202930,',
				'Training' => array(
						'activity_place' => 'saturno',
						'description' => 'Un planeta',
						'type_id' => '1',
						'start_date' => '2015-05-21',
						'end_date' => '2015-05-31',
						'current_state' => '1'
				),
				'TraProcess' => array(
						'TraProcess' => array(
								'id' => '1'
						)
				),
				'TraAlly' => array(
						'TraAlly' => array(
								(int) 0 => '1'
						)
				),
				'PopulationType' => array(
						'PopulationType' => array(
								(int) 0 => '1'
						)
				),
				'PerTrainer' => array(
						'PerTrainer' => array(
								(int) 0 => '1'
						)
				)
		);
		
		
		
		$result = $this->testAction('/Trainings/add', array('data' => $data));
		//El controlador debe devolver nulo porque si el guardado se hace correctamente se debe hacer el redirect al index
		$this->assertNull($result);
		debug($result);
		
	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {
	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
	}

}
