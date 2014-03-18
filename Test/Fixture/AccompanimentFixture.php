<?php
/**
 * AccompanimentFixture
 *
 */
class AccompanimentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id_accompaniment' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'accompaniment_type' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'accompaniment_description' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'participant_number' => array('type' => 'integer', 'null' => false, 'default' => null),
		'adjunct' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'site_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id_accompaniment', 'unique' => 1),
			'site_id' => array('column' => 'site_id', 'unique' => 0)
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
			'id_accompaniment' => 1,
			'accompaniment_type' => 'Lorem ipsum dolor sit amet',
			'accompaniment_description' => 'Lorem ipsum dolor sit amet',
			'participant_number' => 1,
			'adjunct' => 'Lorem ipsum dolor sit amet',
			'site_id' => 'Lorem ipsum dolor sit amet'
		),
	);

}
