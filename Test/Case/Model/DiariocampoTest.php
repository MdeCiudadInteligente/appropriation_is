<<<<<<< HEAD
<?php
App::uses('Diariocampo', 'Model');

/**
 * Diariocampo Test Case
 *
 */
class DiariocampoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.diariocampo',
		'app.acompanamiento',
		'app.reunion',
		'app.diaricamporeu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Diariocampo = ClassRegistry::init('Diariocampo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Diariocampo);

		parent::tearDown();
	}

}
=======
<?php
App::uses('Diariocampo', 'Model');

/**
 * Diariocampo Test Case
 *
 */
class DiariocampoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.diariocampo',
		'app.acompanamiento',
		'app.reunion',
		'app.diaricamporeu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Diariocampo = ClassRegistry::init('Diariocampo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Diariocampo);

		parent::tearDown();
	}

}
>>>>>>> f88ab0ba3c166edb61bf2c895782b9c1e57fb9e9
