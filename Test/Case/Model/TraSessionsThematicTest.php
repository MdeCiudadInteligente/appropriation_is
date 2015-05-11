<?php
App::uses('TraSessionsThematic', 'Model');

/**
 * TraSessionsThematic Test Case
 *
 */
class TraSessionsThematicTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tra_sessions_thematic',
		'app.session',
		'app.thematic',
		'app.divulgation',
		'app.site',
		'app.neighborhood',
		'app.commune',
		'app.zone',
		'app.agent',
		'app.person',
		'app.owner',
		'app.meeting',
		'app.user',
		'app.mee_type',
		'app.meetings_person',
		'app.per_type',
		'app.per_people_type',
		'app.site_type',
		'app.accompaniment',
		'app.acc_type',
		'app.per_trainer',
		'app.per_trainer_type',
		'app.per_profession',
		'app.per_trainer_fund',
		'app.per_trainer_schedule',
		'app.sites_per_trainer',
		'app.training',
		'app.tra_type',
		'app.tra_session',
		'app.sites_session',
		'app.per_participants_training',
		'app.per_participants_training_session',
		'app.tra_ally',
		'app.tra_allies_training',
		'app.tra_process',
		'app.tra_proccesses_training',
		'app.population_type',
		'app.population_types_training',
		'app.per_participant',
		'app.per_marital_status',
		'app.per_school_level',
		'app.per_participants_population_type',
		'app.training_per_trainer',
		'app.divulgations_trainer',
		'app.divtype',
		'app.divulgations_thematic'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TraSessionsThematic = ClassRegistry::init('TraSessionsThematic');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TraSessionsThematic);

		parent::tearDown();
	}

}
