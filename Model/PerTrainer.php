<?php
App::uses('AppModel', 'Model');
/**
 * PerTrainer Model
 *
 * @property PerTrainerType $PerTrainerType
 * @property PerProfession $PerProfession
 * @property PerPeopleType $PerPeopleType
 * @property PerTrainerFund $PerTrainerFund
 * @property Site $Site
 * @property PerTrainerSchedule $PerTrainerSchedule
 */
class PerTrainer extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'per_trainer_type_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'per_profession_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'per_people_type_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'per_trainer_fund_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'site_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'state' => array(
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
		'PerTrainerType' => array(
			'className' => 'PerTrainerType',
			'foreignKey' => 'per_trainer_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'PerProfession' => array(
			'className' => 'PerProfession',
			'foreignKey' => 'per_profession_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'PerPeopleType' => array(
			'className' => 'PerPeopleType',
			'foreignKey' => 'per_people_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'PerTrainerFund' => array(
			'className' => 'PerTrainerFund',
			'foreignKey' => 'per_trainer_fund_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
		/*'Site' => array(
			'className' => 'Site',
			'foreignKey' => 'site_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)*/
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'PerTrainerSchedule' => array(
			'className' => 'PerTrainerSchedule',
			'foreignKey' => 'per_trainer_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
	
	public $hasAndBelongsToMany = array(
			'Site' => array(
					'className' => 'Site',
					'joinTable' => 'sites_per_trainers',
					'foreignKey' => 'per_trainer_id',
					'associationForeignKey' => 'site_id',
					'unique' => 'keepExisting',
					'conditions' => '',
					'fields' => '',
					'order' => '',
					'limit' => '',
					'offset' => '',
					'finderQuery' => '',
			),
			'Training' => array(
					'className' => 'Training',
					'joinTable' => 'per_trainers_training',
					'foreignKey' => 'per_trainer_id',
					'associationForeignKey' => 'training_id',
					'unique' => 'keepExisting',
					'conditions' => '',
					'fields' => '',
					'order' => '',
					'limit' => '',
					'offset' => '',
					'finderQuery' => '',
			)
	);

}
