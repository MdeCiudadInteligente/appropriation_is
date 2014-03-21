<?php
App::uses('Divulgation', 'Model');

/**
 * Divulgation Test Case
 *
 */
class DivulgationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.divulgation',
		'app.site',
		'app.neighborhood',
		'app.commune',
		'app.zone',
		'app.agent',
		'app.person',
		'app.owner',
		'app.user',
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
		$this->Divulgation = ClassRegistry::init('Divulgation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Divulgation);

		parent::tearDown();
	}

}
