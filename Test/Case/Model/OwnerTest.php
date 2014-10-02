<?php
App::uses('Owner', 'Model');

/**
 * Owner Test Case
 *
 */
class OwnerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.owner',
		'app.site',
		'app.person'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Owner = ClassRegistry::init('Owner');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Owner);

		parent::tearDown();
	}

}
