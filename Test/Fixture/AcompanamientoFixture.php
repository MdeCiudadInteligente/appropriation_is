<?php
/**
 * AcompanamientoFixture
 *
 */
class AcompanamientoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'acompanamiento';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id_acompanamiento' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'id_drc' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'tipo_acomp' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'descrp_actividad' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'nro_participantes' => array('type' => 'integer', 'null' => false, 'default' => null),
		'archivo_adjunto' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'fecha_acompanamiento' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id_acompanamiento', 'unique' => 1),
			'id_drc' => array('column' => 'id_drc', 'unique' => 0)
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
			'id_acompanamiento' => 1,
			'id_drc' => 1,
			'tipo_acomp' => 'Lorem ipsum dolor sit amet',
			'descrp_actividad' => 'Lorem ipsum dolor sit amet',
			'nro_participantes' => 1,
			'archivo_adjunto' => 'Lorem ipsum dolor sit amet',
			'fecha_acompanamiento' => '2014-03-17 15:25:44'
		),
	);

}
