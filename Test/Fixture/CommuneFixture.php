<?php
/**
 * CommuneFixture
 *
 */
class CommuneFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id_commune' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'commune_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'zone_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id_commune', 'unique' => 1),
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
			'id_commune' => 1,
			'commune_name' => 'Lorem ipsum dolor sit amet',
			'zone_id' => 1
		),
	);

}
