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
