<?php
/**
 * SitesTrainingFixture
 *
 */
class SitesTrainingFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'site_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'training_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'site_id' => array('column' => 'site_id', 'unique' => 0),
			'training_id' => array('column' => 'training_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'site_id' => 1,
			'training_id' => 1
		),
	);

}
