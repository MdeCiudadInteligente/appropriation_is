<?php
/**
 * TrainingFixture
 *
 */
class TrainingFixture extends CakeTestFixture {
	
	//public $import = array('model' => 'Training');

/**
 * Table name
 *
 * @var string
 */
	//public $table = 'training';
	
	
	//public $name='Training';

	//public $import='Training';

 /** Fields
 *
 * @var array
 */

	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'code' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'activity_place' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 80, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'description' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'participant_number' => array('type' => 'integer', 'null' => false, 'default' => null),
		'type_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'site_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'process_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'alliance_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'population_type_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'creation_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modification_date' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'indexes' => array(
			
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
			'code' => 'Lorem ipsum dolor sit amet',
			'activity_place' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'participant_number' => 1,
			'type_id' => 1,
			'site_id' => 1,
			'user_id' => 1,
			'process_id' => 1,
			'alliance_id' => 1,
			'population_type_id' => 1,
			'creation_date' => '2015-04-01 15:50:07',
			'modification_date' => 1427896207
		),
	);

}
