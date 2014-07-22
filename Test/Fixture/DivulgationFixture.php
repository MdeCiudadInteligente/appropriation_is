<<<<<<< HEAD
<?php
/**
 * DivulgationFixture
 *
 */
class DivulgationFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id_divulgation' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'divulgation_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'divulgation_type' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'divulgation_description' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'participant_number' => array('type' => 'integer', 'null' => false, 'default' => null),
		'activity_place' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'adjunct' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'site_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id_divulgation', 'unique' => 1),
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
			'id_divulgation' => 1,
			'divulgation_name' => 'Lorem ipsum dolor sit amet',
			'divulgation_type' => 'Lorem ipsum dolor sit amet',
			'divulgation_description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'participant_number' => 1,
			'activity_place' => 'Lorem ipsum dolor sit amet',
			'adjunct' => 'Lorem ipsum dolor sit amet',
			'site_id' => 'Lorem ipsum dolor sit amet'
		),
	);

}
=======
<?php
/**
 * DivulgationFixture
 *
 */
class DivulgationFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id_divulgation' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'divulgation_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'divulgation_type' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'divulgation_description' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'participant_number' => array('type' => 'integer', 'null' => false, 'default' => null),
		'activity_place' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'adjunct' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'site_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id_divulgation', 'unique' => 1),
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
			'id_divulgation' => 1,
			'divulgation_name' => 'Lorem ipsum dolor sit amet',
			'divulgation_type' => 'Lorem ipsum dolor sit amet',
			'divulgation_description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'participant_number' => 1,
			'activity_place' => 'Lorem ipsum dolor sit amet',
			'adjunct' => 'Lorem ipsum dolor sit amet',
			'site_id' => 'Lorem ipsum dolor sit amet'
		),
	);

}
>>>>>>> f88ab0ba3c166edb61bf2c895782b9c1e57fb9e9
