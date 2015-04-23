<?php
/**
 * PerParticipantFixture
 *
 */
class PerParticipantFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'neighborhood_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'other_population_type' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 80, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'per_people_type_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'marital_status_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'school_level_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'creation_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modification_date' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'neighborhood_id' => array('column' => 'neighborhood_id', 'unique' => 0),
			'per_people_type_id' => array('column' => 'per_people_type_id', 'unique' => 0),
			'user_id' => array('column' => 'user_id', 'unique' => 0),
			'marital_status_id' => array('column' => 'marital_status_id', 'unique' => 0),
			'school_level_id' => array('column' => 'school_level_id', 'unique' => 0)
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
			'id' => 1,
			'neighborhood_id' => 1,
			'other_population_type' => 'Lorem ipsum dolor sit amet',
			'per_people_type_id' => 1,
			'marital_status_id' => 1,
			'school_level_id' => 1,
			'creation_date' => '2015-04-22 18:39:44',
			'modification_date' => 1429720784,
			'user_id' => 1
		),
	);

}
