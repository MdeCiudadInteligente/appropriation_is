<?php
/**
 * PerTrainerScheduleFixture
 *
 */
class PerTrainerScheduleFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'day' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 90, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'start_time' => array('type' => 'time', 'null' => false, 'default' => null),
		'end_time' => array('type' => 'time', 'null' => false, 'default' => null),
		'per_trainer_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'unique'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'creation_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modification_date' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'per_trainer_id' => array('column' => 'per_trainer_id', 'unique' => 1),
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
			'day' => 'Lorem ipsum dolor sit amet',
			'start_time' => '15:23:51',
			'end_time' => '15:23:51',
			'per_trainer_id' => 1,
			'user_id' => 1,
			'creation_date' => '2015-05-06 15:23:51',
			'modification_date' => 1430918631
		),
	);

}
