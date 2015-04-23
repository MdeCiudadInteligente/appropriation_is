<?php
App::uses('PerSchoolLevel', 'Model');

/**
 * PerSchoolLevel Test Case
 *
 */
class PerSchoolLevelTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.per_school_level'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PerSchoolLevel = ClassRegistry::init('PerSchoolLevel');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PerSchoolLevel);

		parent::tearDown();
	}

}
