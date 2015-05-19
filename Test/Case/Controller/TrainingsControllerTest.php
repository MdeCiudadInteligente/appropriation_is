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
		//debug($result['trainings'][0]);
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
