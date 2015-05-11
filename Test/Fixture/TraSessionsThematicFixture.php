<?php
/**
 * TraSessionsThematicFixture
 *
 */
class TraSessionsThematicFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'session_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'thematic_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'session_id' => array('column' => 'session_id', 'unique' => 0),
			'thematic_id' => array('column' => 'thematic_id', 'unique' => 0)
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
			'session_id' => 1,
			'thematic_id' => 1
		),
	);

}
