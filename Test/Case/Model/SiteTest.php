<<<<<<< HEAD
<?php
App::uses('Site', 'Model');

/**
 * Site Test Case
 *
 */
class SiteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.site',
		'app.neighborhood',
		'app.commune',
		'app.zone',
		'app.site_type',
		'app.accompaniment',
		'app.meeting',
		'app.meeting_person',
		'app.person',
		'app.agent',
		'app.user',
		'app.empleado',
		'app.diariocampo',
		'app.acompanamiento',
		'app.reunion',
		'app.owner'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Site = ClassRegistry::init('Site');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Site);

		parent::tearDown();
	}

}
=======
<?php
App::uses('Site', 'Model');

/**
 * Site Test Case
 *
 */
class SiteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.site',
		'app.neighborhood',
		'app.commune',
		'app.zone',
		'app.site_type',
		'app.accompaniment',
		'app.meeting',
		'app.meeting_person',
		'app.person',
		'app.agent',
		'app.user',
		'app.empleado',
		'app.diariocampo',
		'app.acompanamiento',
		'app.reunion',
		'app.owner'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Site = ClassRegistry::init('Site');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Site);

		parent::tearDown();
	}

}
>>>>>>> f88ab0ba3c166edb61bf2c895782b9c1e57fb9e9
