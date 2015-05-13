<?php
/**
 * TraSessionsPerTrainerFixture
 *
 */
class TraSessionsPerTrainerFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'trainer_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'session_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'trainer_id' => array('column' => 'trainer_id', 'unique' => 0),
			'session_id' => array('column' => 'session_id', 'unique' => 0)
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
			'trainer_id' => 1,
			'session_id' => 1
		),
	);

}
