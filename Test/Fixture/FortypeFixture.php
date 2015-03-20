<?php
/**
 * FortypeFixture
 *
 */
class FortypeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 90, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'creation_date' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modification_date' => array('type' => 'timestamp', 'null' => true, 'default' => null),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'creation_date' => '2015-03-20 14:37:59',
			'modification_date' => 1426858679,
			'user_id' => 1
		),
	);

}
