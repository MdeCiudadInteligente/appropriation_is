<?php
App::uses('SiteType', 'Model');

/**
 * SiteType Test Case
 *
 */
class SiteTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.site_type',
		'app.site'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SiteType = ClassRegistry::init('SiteType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SiteType);

		parent::tearDown();
	}

}
