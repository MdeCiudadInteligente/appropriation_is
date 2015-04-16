<?php
App::uses('Forally', 'Model');

/**
 * Forally Test Case
 *
 */
class ForallyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.forally'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Forally = ClassRegistry::init('Forally');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Forally);

		parent::tearDown();
	}

}
