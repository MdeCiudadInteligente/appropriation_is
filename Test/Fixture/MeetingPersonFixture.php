<?php
/**
 * MeetingPersonFixture
 *
 */
class MeetingPersonFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id_meeting_people' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'meeting_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'person_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id_meeting_people', 'unique' => 1),
			'meeting_id' => array('column' => array('meeting_id', 'person_id'), 'unique' => 0),
			'person_id' => array('column' => 'person_id', 'unique' => 0)
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
			'id_meeting_people' => 1,
			'meeting_id' => 1,
			'person_id' => 'Lorem ipsum dolor sit amet'
		),
	);

}
