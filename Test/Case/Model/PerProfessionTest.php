<?php
App::uses('PerProfession', 'Model');

/**
 * PerProfession Test Case
 *
 */
class PerProfessionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.per_profession'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PerProfession = ClassRegistry::init('PerProfession');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PerProfession);

		parent::tearDown();
	}

}
