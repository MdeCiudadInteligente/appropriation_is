<?php
App::uses('TraType', 'Model');

/**
 * TraType Test Case
 *
 */
class TraTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tra_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TraType = ClassRegistry::init('TraType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TraType);

		parent::tearDown();
	}

}
