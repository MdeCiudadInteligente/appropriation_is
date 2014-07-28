<?php
App::uses('Zone', 'Model');

/**
 * Zone Test Case
 *
 */
class ZoneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.zone',
		'app.agent',
		'app.person',
		'app.owner',
		'app.site',
		'app.neighborhood',
		'app.commune',
		'app.site_type',
		'app.accompaniment',
		'app.meeting',
		'app.meeting_person',
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
		$this->Zone = ClassRegistry::init('Zone');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Zone);

		parent::tearDown();
	}

}
