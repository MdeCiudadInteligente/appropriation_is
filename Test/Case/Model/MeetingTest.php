<?php
App::uses('Meeting', 'Model');

/**
 * Meeting Test Case
 *
 */
class MeetingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.meeting',
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
		'app.meetings_person'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Meeting = ClassRegistry::init('Meeting');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Meeting);

		parent::tearDown();
	}

}
