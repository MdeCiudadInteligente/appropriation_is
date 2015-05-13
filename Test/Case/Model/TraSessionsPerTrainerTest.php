<?php
App::uses('TraSessionsPerTrainer', 'Model');

/**
 * TraSessionsPerTrainer Test Case
 *
 */
class TraSessionsPerTrainerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tra_sessions_per_trainer',
		'app.trainer',
		'app.session'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TraSessionsPerTrainer = ClassRegistry::init('TraSessionsPerTrainer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TraSessionsPerTrainer);

		parent::tearDown();
	}

}
