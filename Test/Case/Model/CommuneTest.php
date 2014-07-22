<<<<<<< HEAD
<?php
App::uses('Commune', 'Model');

/**
 * Commune Test Case
 *
 */
class CommuneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.commune',
		'app.zone',
		'app.neighborhood'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Commune = ClassRegistry::init('Commune');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Commune);

		parent::tearDown();
	}

}
=======
<?php
App::uses('Commune', 'Model');

/**
 * Commune Test Case
 *
 */
class CommuneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.commune',
		'app.zone',
		'app.neighborhood'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Commune = ClassRegistry::init('Commune');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Commune);

		parent::tearDown();
	}

}
>>>>>>> f88ab0ba3c166edb61bf2c895782b9c1e57fb9e9
