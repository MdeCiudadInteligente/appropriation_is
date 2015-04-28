<?php
/**
 * PerParticipantsTrainingFixture
 *
 */
class PerParticipantsTrainingFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'per_participants_training';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'training_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'participant_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'certification_status' => array('type' => 'integer', 'null' => false, 'default' => null),
		'creation_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modification_date' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'training_id' => array('column' => 'training_id', 'unique' => 0),
			'user_id' => array('column' => 'user_id', 'unique' => 0),
			'participant_id' => array('column' => 'participant_id', 'unique' => 0)
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
			'training_id' => 1,
			'participant_id' => 1,
			'certification_status' => 1,
			'creation_date' => '2015-04-27 21:36:04',
			'modification_date' => 1430163364,
			'user_id' => 1
		),
	);

}
