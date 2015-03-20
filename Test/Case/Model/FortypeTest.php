<?php
App::uses('Fortype', 'Model');

/**
 * Fortype Test Case
 *
 */
class FortypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fortype'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Fortype = ClassRegistry::init('Fortype');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Fortype);

		parent::tearDown();
	}

}
