<?php
App::uses('PerType', 'Model');

/**
 * PerType Test Case
 *
 */
class PerTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.per_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PerType = ClassRegistry::init('PerType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PerType);

		parent::tearDown();
	}

}
