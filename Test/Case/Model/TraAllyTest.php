<?php
App::uses('TraAlly', 'Model');

/**
 * TraAlly Test Case
 *
 */
class TraAllyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tra_ally'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TraAlly = ClassRegistry::init('TraAlly');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TraAlly);

		parent::tearDown();
	}

}
