<?php
App::uses('PerParticipant', 'Model');

/**
 * PerParticipant Test Case
 *
 */
class PerParticipantTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.per_participant'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PerParticipant = ClassRegistry::init('PerParticipant');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PerParticipant);

		parent::tearDown();
	}

}
