<<<<<<< HEAD
<?php
App::uses('AppModel', 'Model');
/**
 * MeetingsPerson Model
 *
 * @property Meeting $Meeting
 * @property Person $Person
 */
class MeetingsPerson extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'id_meeting_people';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Meeting' => array(
			'className' => 'Meeting',
			'foreignKey' => 'meeting_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Person' => array(
			'className' => 'Person',
			'foreignKey' => 'person_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
=======
<?php
App::uses('AppModel', 'Model');
/**
 * MeetingsPerson Model
 *
 * @property Meeting $Meeting
 * @property Person $Person
 */
class MeetingsPerson extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'id_meeting_people';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Meeting' => array(
			'className' => 'Meeting',
			'foreignKey' => 'meeting_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Person' => array(
			'className' => 'Person',
			'foreignKey' => 'person_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
>>>>>>> f88ab0ba3c166edb61bf2c895782b9c1e57fb9e9
