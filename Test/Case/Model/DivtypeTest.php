<?php
App::uses('Divtype', 'Model');

/**
 * Divtype Test Case
 *
 */
class DivtypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.divtype'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Divtype = ClassRegistry::init('Divtype');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Divtype);

		parent::tearDown();
	}

}
