<?php
/**
 * AgentFixture
 *
 */
class AgentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id_agent' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'person_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'zone_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id_agent', 'unique' => 1),
			'person_id' => array('column' => 'person_id', 'unique' => 0),
			'zone_id' => array('column' => 'zone_id', 'unique' => 0)
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
			'id_agent' => 'Lorem ipsum dolor sit amet',
			'person_id' => 'Lorem ipsum dolor sit amet',
			'zone_id' => 1
		),
	);

}
