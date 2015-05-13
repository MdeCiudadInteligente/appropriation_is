<?php
App::uses('AppModel', 'Model');
/**
 * TraSessionsPerTrainer Model
 *
 * @property Trainer $Trainer
 * @property Session $Session
 */
class TraSessionsPerTrainer extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'session_id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'trainer_id' => array(
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

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'PerTrainer' => array(
			'className' => 'PerTrainer',
			'foreignKey' => 'trainer_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TraSession' => array(
			'className' => 'TraSession',
			'foreignKey' => 'session_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
