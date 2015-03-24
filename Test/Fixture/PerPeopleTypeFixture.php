<?php
/**
 * PerPeopleTypeFixture
 *
 */
class PerPeopleTypeFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'per_people_type';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'person_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'length' => 15),
		'per_type_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'creation_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modification_date' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'indexes' => array(
			
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
			'person_id' => '',
			'per_type_id' => 1,
			'creation_date' => '2015-03-24 21:00:40',
			'modification_date' => 1427227240,
			'user_id' => 1
		),
	);

}
