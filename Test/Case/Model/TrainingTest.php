<?php
App::uses('Training', 'Model');

/**
 * Training Test Case
 *
 */
class TrainingTest extends CakeTestCase {

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
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Training = ClassRegistry::init('Training');
	}
	
	public function testGetInstance()	
	{
		$code = $this->Training->find('first');
		debug($code);
		$this->assertEquals($code, 'Lorem ipsum dolor sit amet');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Training);

		parent::tearDown();
	}

}
