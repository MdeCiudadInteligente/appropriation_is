<?php
App::uses('PerPeopleType', 'Model');

/**
 * PerPeopleType Test Case
 *
 */
class PerPeopleTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.per_people_type',
		'app.per_trainer',
		'app.per_trainer_type',
		'app.per_profession',
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
		'app.site_type',
		'app.accompaniment',
		'app.per_trainer_schedule'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PerPeopleType = ClassRegistry::init('PerPeopleType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PerPeopleType);

		parent::tearDown();
	}

}
