<?php
App::uses('Thematic', 'Model');

/**
 * Thematic Test Case
 *
 */
class ThematicTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.thematic'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Thematic = ClassRegistry::init('Thematic');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Thematic);

		parent::tearDown();
	}

}
