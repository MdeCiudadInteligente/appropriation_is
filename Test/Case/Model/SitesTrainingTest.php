<?php
App::uses('SitesTraining', 'Model');

/**
 * SitesTraining Test Case
 *
 */
class SitesTrainingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sites_training',
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
		'app.training',
		'app.tra_type',
		'app.tra_session',
		'app.per_participants_training',
		'app.per_participants_training_session',
		'app.thematic',
		'app.divulgation',
		'app.population_type',
		'app.population_types_training',
		'app.per_participant',
		'app.per_marital_status',
		'app.per_school_level',
		'app.per_participants_population_type',
		'app.divtype',
		'app.per_trainer',
		'app.per_trainer_type',
		'app.per_profession',
		'app.per_trainer_fund',
		'app.per_trainer_schedule',
		'app.training_per_trainer',
		'app.divulgations_trainer',
		'app.tra_sessions_per_trainer',
		'app.divulgations_thematic',
		'app.tra_sessions_thematic',
		'app.tra_ally',
		'app.tra_allies_training',
		'app.tra_process',
		'app.tra_proccesses_training'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SitesTraining = ClassRegistry::init('SitesTraining');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SitesTraining);

		parent::tearDown();
	}

}
