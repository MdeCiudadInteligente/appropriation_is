<?php
App::uses('MeetingPerson', 'Model');

/**
 * MeetingPerson Test Case
 *
 */
class MeetingPersonTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.meeting_person',
		'app.meeting',
		'app.person'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MeetingPerson = ClassRegistry::init('MeetingPerson');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MeetingPerson);

		parent::tearDown();
	}

}
