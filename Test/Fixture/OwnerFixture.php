<<<<<<< HEAD
<?php
/**
 * OwnerFixture
 *
 */
class OwnerFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id_owner' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'roll' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'site_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'person_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id_owner', 'unique' => 1),
			'site_id' => array('column' => 'site_id', 'unique' => 0),
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
			'id_owner' => 'Lorem ipsum dolor sit amet',
			'roll' => 'Lorem ipsum dolor sit amet',
			'site_id' => 'Lorem ipsum dolor sit amet',
			'person_id' => 'Lorem ipsum dolor sit amet'
		),
	);

}
=======
<?php
/**
 * OwnerFixture
 *
 */
class OwnerFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id_owner' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'roll' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'site_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'person_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id_owner', 'unique' => 1),
			'site_id' => array('column' => 'site_id', 'unique' => 0),
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
			'id_owner' => 'Lorem ipsum dolor sit amet',
			'roll' => 'Lorem ipsum dolor sit amet',
			'site_id' => 'Lorem ipsum dolor sit amet',
			'person_id' => 'Lorem ipsum dolor sit amet'
		),
	);

}
>>>>>>> f88ab0ba3c166edb61bf2c895782b9c1e57fb9e9
