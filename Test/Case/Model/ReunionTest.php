<?php
App::uses('Reunion', 'Model');

/**
 * Reunion Test Case
 *
 */
class ReunionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.reunion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Reunion = ClassRegistry::init('Reunion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Reunion);

		parent::tearDown();
	}

}
