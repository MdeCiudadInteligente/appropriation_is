<?php
App::uses('PerTrainerFund', 'Model');

/**
 * PerTrainerFund Test Case
 *
 */
class PerTrainerFundTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.per_trainer_fund'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PerTrainerFund = ClassRegistry::init('PerTrainerFund');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PerTrainerFund);

		parent::tearDown();
	}

}
