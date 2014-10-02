<?php
/**
 * SiteTypeFixture
 *
 */
class SiteTypeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id_site_type' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'site_type' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'site_estado' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id_site_type', 'unique' => 1)
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
			'id_site_type' => 1,
			'site_type' => 'Lorem ipsum dolor sit amet',
			'site_estado' => 'Lorem ipsum dolor sit amet'
		),
	);

}
