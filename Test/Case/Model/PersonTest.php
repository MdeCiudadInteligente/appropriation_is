<<<<<<< HEAD
<?php
App::uses('Person', 'Model');

/**
 * Person Test Case
 *
 */
class PersonTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.person',
		'app.agent',
		'app.zone',
		'app.commune',
		'app.neighborhood',
		'app.site',
		'app.site_type',
		'app.accompaniment',
		'app.meeting',
		'app.meetings_person',
		'app.owner',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Person = ClassRegistry::init('Person');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Person);

		parent::tearDown();
	}

}
=======
<?php
App::uses('Person', 'Model');

/**
 * Person Test Case
 *
 */
class PersonTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.person',
		'app.agent',
		'app.zone',
		'app.commune',
		'app.neighborhood',
		'app.site',
		'app.site_type',
		'app.accompaniment',
		'app.meeting',
		'app.meetings_person',
		'app.owner',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Person = ClassRegistry::init('Person');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Person);

		parent::tearDown();
	}

}
>>>>>>> f88ab0ba3c166edb61bf2c895782b9c1e57fb9e9
