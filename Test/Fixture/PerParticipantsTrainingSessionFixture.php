<?php
/**
 * PerParticipantsTrainingSessionFixture
 *
 */
class PerParticipantsTrainingSessionFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'per_participants_training_session';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'participants_training_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'session_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'per_participants_training_id' => array('column' => 'participants_training_id', 'unique' => 0),
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
			'participants_training_id' => 1,
			'session_id' => 1
		),
	);

}
