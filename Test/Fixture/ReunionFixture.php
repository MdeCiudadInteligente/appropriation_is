<<<<<<< HEAD
<?php
/**
 * ReunionFixture
 *
 */
class ReunionFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'reunion';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idreunion' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'id_drcp' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'tiporeunion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'nombreasistentes' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'entidad' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cargo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'correo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'telefono' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'adjunto1' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'adjunto2' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'adjunto3' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idreunion', 'unique' => 1),
			'id_drcp' => array('column' => 'id_drcp', 'unique' => 0)
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
			'idreunion' => 1,
			'id_drcp' => 1,
			'tiporeunion' => 'Lorem ipsum dolor sit amet',
			'nombreasistentes' => 'Lorem ipsum dolor sit amet',
			'entidad' => 'Lorem ipsum dolor sit amet',
			'cargo' => 'Lorem ipsum dolor sit amet',
			'correo' => 'Lorem ipsum dolor sit amet',
			'telefono' => 'Lorem ipsum dolor sit amet',
			'adjunto1' => 'Lorem ipsum dolor sit amet',
			'adjunto2' => 'Lorem ipsum dolor sit amet',
			'adjunto3' => 'Lorem ipsum dolor sit amet'
		),
	);

}
=======
<?php
/**
 * ReunionFixture
 *
 */
class ReunionFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'reunion';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idreunion' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'id_drcp' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'tiporeunion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'nombreasistentes' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'entidad' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cargo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'correo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'telefono' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'adjunto1' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'adjunto2' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'adjunto3' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idreunion', 'unique' => 1),
			'id_drcp' => array('column' => 'id_drcp', 'unique' => 0)
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
			'idreunion' => 1,
			'id_drcp' => 1,
			'tiporeunion' => 'Lorem ipsum dolor sit amet',
			'nombreasistentes' => 'Lorem ipsum dolor sit amet',
			'entidad' => 'Lorem ipsum dolor sit amet',
			'cargo' => 'Lorem ipsum dolor sit amet',
			'correo' => 'Lorem ipsum dolor sit amet',
			'telefono' => 'Lorem ipsum dolor sit amet',
			'adjunto1' => 'Lorem ipsum dolor sit amet',
			'adjunto2' => 'Lorem ipsum dolor sit amet',
			'adjunto3' => 'Lorem ipsum dolor sit amet'
		),
	);

}
>>>>>>> f88ab0ba3c166edb61bf2c895782b9c1e57fb9e9
