<?php
App::uses('TraProcess', 'Model');

/**
 * TraProcess Test Case
 *
 */
class TraProcessTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tra_process'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TraProcess = ClassRegistry::init('TraProcess');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TraProcess);

		parent::tearDown();
	}

}
