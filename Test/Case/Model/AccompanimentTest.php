<<<<<<< HEAD
<?php
App::uses('Accompaniment', 'Model');

/**
 * Accompaniment Test Case
 *
 */
class AccompanimentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.accompaniment',
		'app.site'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Accompaniment = ClassRegistry::init('Accompaniment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Accompaniment);

		parent::tearDown();
	}

}
=======
<?php
App::uses('Accompaniment', 'Model');

/**
 * Accompaniment Test Case
 *
 */
class AccompanimentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.accompaniment',
		'app.site'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Accompaniment = ClassRegistry::init('Accompaniment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Accompaniment);

		parent::tearDown();
	}

}
>>>>>>> f88ab0ba3c166edb61bf2c895782b9c1e57fb9e9
