<?php
App::uses('ForProcess', 'Model');

/**
 * ForProcess Test Case
 *
 */
class ForProcessTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.for_process'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ForProcess = ClassRegistry::init('ForProcess');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ForProcess);

		parent::tearDown();
	}

}
