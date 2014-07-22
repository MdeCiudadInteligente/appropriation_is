<?php
App::uses('Acompanamiento', 'Model');

/**
 * Acompanamiento Test Case
 *
 */
class AcompanamientoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.acompanamiento'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Acompanamiento = ClassRegistry::init('Acompanamiento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Acompanamiento);

		parent::tearDown();
	}

}
