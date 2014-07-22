<<<<<<< HEAD
<?php
App::uses('User', 'Model');

/**
 * User Test Case
 *
 */
class UserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user',
		'app.agent',
		'app.person',
		'app.owner',
		'app.site',
		'app.neighborhood',
		'app.commune',
		'app.zone',
		'app.site_type',
		'app.accompaniment',
		'app.meeting',
		'app.meeting_person'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->User = ClassRegistry::init('User');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->User);

		parent::tearDown();
	}

}
=======
<?php
App::uses('User', 'Model');

/**
 * User Test Case
 *
 */
class UserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user',
		'app.agent',
		'app.person',
		'app.owner',
		'app.site',
		'app.neighborhood',
		'app.commune',
		'app.zone',
		'app.site_type',
		'app.accompaniment',
		'app.meeting',
		'app.meeting_person'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->User = ClassRegistry::init('User');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->User);

		parent::tearDown();
	}

}
>>>>>>> f88ab0ba3c166edb61bf2c895782b9c1e57fb9e9
