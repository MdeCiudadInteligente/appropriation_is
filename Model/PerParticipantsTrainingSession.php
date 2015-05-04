<?php
App::uses('AppModel', 'Model');
/**
 * PerParticipantsTrainingSession Model
 *
 */
class PerParticipantsTrainingSession extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'per_participants_training_session';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'n';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'participants_training_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'session_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
