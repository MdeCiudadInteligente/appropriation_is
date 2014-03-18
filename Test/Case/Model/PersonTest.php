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
		'app.user',
		'app.empleado',
		'app.diariocampo',
		'app.acompanamiento',
		'app.reunion',
		'app.owner',
		'app.site'
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
