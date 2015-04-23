<?php
App::uses('PerMaritalStatus', 'Model');

/**
 * PerMaritalStatus Test Case
 *
 */
class PerMaritalStatusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.per_marital_status'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PerMaritalStatus = ClassRegistry::init('PerMaritalStatus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PerMaritalStatus);

		parent::tearDown();
	}

}
