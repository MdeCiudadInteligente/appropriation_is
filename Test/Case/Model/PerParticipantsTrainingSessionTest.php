<?php
App::uses('PerParticipantsTrainingSession', 'Model');

/**
 * PerParticipantsTrainingSession Test Case
 *
 */
class PerParticipantsTrainingSessionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.per_participants_training_session'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PerParticipantsTrainingSession = ClassRegistry::init('PerParticipantsTrainingSession');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PerParticipantsTrainingSession);

		parent::tearDown();
	}

}
