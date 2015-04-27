<?php
App::uses('PerParticipantsTraining', 'Model');

/**
 * PerParticipantsTraining Test Case
 *
 */
class PerParticipantsTrainingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.per_participants_training'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PerParticipantsTraining = ClassRegistry::init('PerParticipantsTraining');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PerParticipantsTraining);

		parent::tearDown();
	}

}
