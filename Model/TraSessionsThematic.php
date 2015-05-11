<?php
App::uses('AppModel', 'Model');
/**
 * TraSessionsThematic Model
 *
 * @property Session $Session
 * @property Thematic $Thematic
 */
class TraSessionsThematic extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
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
		'thematic_id' => array(
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

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'TraSession' => array(
			'className' => 'TraSession',
			'foreignKey' => 'session_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Thematic' => array(
			'className' => 'Thematic',
			'foreignKey' => 'thematic_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
