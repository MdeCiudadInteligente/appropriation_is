<?php
App::uses('AccType', 'Model');

/**
 * AccType Test Case
 *
 */
class AccTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.acc_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AccType = ClassRegistry::init('AccType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AccType);

		parent::tearDown();
	}

}
