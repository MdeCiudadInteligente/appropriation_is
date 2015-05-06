<?php
App::uses('PerTrainerSchedule', 'Model');

/**
 * PerTrainerSchedule Test Case
 *
 */
class PerTrainerScheduleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.per_trainer_schedule',
		'app.per_trainer',
		'app.per_trainer_type',
		'app.per_profession',
		'app.per_people_type',
		'app.per_trainer_fund',
		'app.site',
		'app.neighborhood',
		'app.commune',
		'app.zone',
		'app.agent',
		'app.person',
		'app.owner',
		'app.meeting',
		'app.user',
		'app.meetings_person',
		'app.per_type',
		'app.site_type',
		'app.accompaniment',
		'app.sites_per_trainer',
		'app.tra_session',
		'app.training',
		'app.tra_type',
		'app.tra_ally',
		'app.tra_allies_training',
		'app.tra_process',
		'app.tra_proccesses_training',
		'app.population_type',
		'app.divulgation',
		'app.divtype',
		'app.divulgations_trainer',
		'app.thematic',
		'app.divulgations_thematic',
		'app.population_types_training',
		'app.per_participant',
		'app.per_marital_status',
		'app.per_school_level',
		'app.per_participants_population_type',
		'app.per_participants_training',
		'app.training_per_trainer',
		'app.sites_session',
		'app.per_participants_training_session'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PerTrainerSchedule = ClassRegistry::init('PerTrainerSchedule');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PerTrainerSchedule);

		parent::tearDown();
	}

}
