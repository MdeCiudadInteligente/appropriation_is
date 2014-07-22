<<<<<<< HEAD
<?php
/**
 * NeighborhoodFixture
 *
 */
class NeighborhoodFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id_neighborhood' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'neighborhood_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'commune_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id_neighborhood', 'unique' => 1),
			'commune_id' => array('column' => 'commune_id', 'unique' => 0)
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
			'id_neighborhood' => 1,
			'neighborhood_name' => 'Lorem ipsum dolor sit amet',
			'commune_id' => 1
		),
	);

}
=======
<?php
/**
 * NeighborhoodFixture
 *
 */
class NeighborhoodFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id_neighborhood' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'neighborhood_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'commune_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id_neighborhood', 'unique' => 1),
			'commune_id' => array('column' => 'commune_id', 'unique' => 0)
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
			'id_neighborhood' => 1,
			'neighborhood_name' => 'Lorem ipsum dolor sit amet',
			'commune_id' => 1
		),
	);

}
>>>>>>> f88ab0ba3c166edb61bf2c895782b9c1e57fb9e9
