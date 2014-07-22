<<<<<<< HEAD
<?php
App::uses('MeetingsPerson', 'Model');

/**
 * MeetingsPerson Test Case
 *
 */
class MeetingsPersonTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.meetings_person',
		'app.meeting',
		'app.site',
		'app.neighborhood',
		'app.commune',
		'app.zone',
		'app.agent',
		'app.person',
		'app.owner',
		'app.user',
		'app.site_type',
		'app.accompaniment'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MeetingsPerson = ClassRegistry::init('MeetingsPerson');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MeetingsPerson);

		parent::tearDown();
	}

}
=======
<?php
App::uses('MeetingsPerson', 'Model');

/**
 * MeetingsPerson Test Case
 *
 */
class MeetingsPersonTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.meetings_person',
		'app.meeting',
		'app.site',
		'app.neighborhood',
		'app.commune',
		'app.zone',
		'app.agent',
		'app.person',
		'app.owner',
		'app.user',
		'app.site_type',
		'app.accompaniment'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MeetingsPerson = ClassRegistry::init('MeetingsPerson');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MeetingsPerson);

		parent::tearDown();
	}

}
>>>>>>> f88ab0ba3c166edb61bf2c895782b9c1e57fb9e9
