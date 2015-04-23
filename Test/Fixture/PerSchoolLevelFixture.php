<?php
/**
 * PerSchoolLevelFixture
 *
 */
class PerSchoolLevelFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'per_school_level';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 80, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'creation_date' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modification_date' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'user_id' => array('column' => 'user_id', 'unique' => 0)
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
			'name' => 'Lorem ipsum dolor sit amet',
			'creation_date' => '2015-04-22 18:30:20',
			'modification_date' => 1429720220,
			'user_id' => 1
		),
	);

}
