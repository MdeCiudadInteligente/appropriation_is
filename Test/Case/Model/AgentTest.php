<<<<<<< HEAD
<?php
App::uses('Agent', 'Model');

/**
 * Agent Test Case
 *
 */
class AgentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.agent',
		'app.person',
		'app.zone',
		'app.user',
		'app.empleado',
		'app.diariocampo',
		'app.acompanamiento',
		'app.reunion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Agent = ClassRegistry::init('Agent');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Agent);

		parent::tearDown();
	}

}
=======
<?php
App::uses('Agent', 'Model');

/**
 * Agent Test Case
 *
 */
class AgentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.agent',
		'app.person',
		'app.zone',
		'app.user',
		'app.empleado',
		'app.diariocampo',
		'app.acompanamiento',
		'app.reunion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Agent = ClassRegistry::init('Agent');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Agent);

		parent::tearDown();
	}

}
>>>>>>> f88ab0ba3c166edb61bf2c895782b9c1e57fb9e9
