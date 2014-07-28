<?php
/**
 * DiariocampoFixture
 *
 */
class DiariocampoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'diariocampo';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'iddiariocampo' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'ced_empleado' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'iddiariocampo', 'unique' => 1),
			'ced_empleado' => array('column' => 'ced_empleado', 'unique' => 0)
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
			'iddiariocampo' => 1,
			'ced_empleado' => 'Lorem ipsum dolor sit amet'
		),
	);

}
