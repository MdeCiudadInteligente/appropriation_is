<?php
App::uses('PerTypeTicManager', 'Model');

/**
 * PerTypeTicManager Test Case
 *
 */
class PerTypeTicManagerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.per_type_tic_manager'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PerTypeTicManager = ClassRegistry::init('PerTypeTicManager');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PerTypeTicManager);

		parent::tearDown();
	}

}
