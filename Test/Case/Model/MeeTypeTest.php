<?php
App::uses('MeeType', 'Model');

/**
 * MeeType Test Case
 *
 */
class MeeTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mee_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MeeType = ClassRegistry::init('MeeType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MeeType);

		parent::tearDown();
	}

}
