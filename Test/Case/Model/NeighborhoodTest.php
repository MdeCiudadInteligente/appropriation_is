<?php
App::uses('Neighborhood', 'Model');

/**
 * Neighborhood Test Case
 *
 */
class NeighborhoodTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.neighborhood',
		'app.commune',
		'app.zone',
		'app.site'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Neighborhood = ClassRegistry::init('Neighborhood');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Neighborhood);

		parent::tearDown();
	}

}
