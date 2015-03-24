<?php
/**
 * PerTrainerFixture
 *
 */
class PerTrainerFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'per_trainer_type_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'per_profession_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'per_people_type_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'per_trainer_fund_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'site_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'observations' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'state' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'id_UNIQUE' => array('column' => 'id', 'unique' => 1)
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
			'per_trainer_type_id' => 1,
			'per_profession_id' => 1,
			'per_people_type_id' => 1,
			'per_trainer_fund_id' => 1,
			'site_id' => 1,
			'observations' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'state' => 1
		),
	);

}
