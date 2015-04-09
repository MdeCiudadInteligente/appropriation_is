<?php
App::uses('AppModel', 'Model');
/**
 * Divulgation Model
 *
 * @property Site $Site
 */
class Divulgation extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'id_divulgation';
	var $actsAs = array(
			'MeioUpload.MeioUpload' => array('divulgation_adjunct2','divulgation_adjunct1','divulgation_adjunct')
	);
/**
 * Display field
 *
 * @var string
 */
	//public $displayField = 'divulgation_name';
	public $displayField = 'population_type_id';


	
	
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'id_divulgation' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'divulgation_date' => array(
					'notEmpty' => array(
							'rule' => array('notEmpty'),
							//'message' => 'Your custom message here',
							//'allowEmpty' => false,
							//'required' => false,
							//'last' => false, // Stop validation after this rule
							//'on' => 'create', // Limit validation to 'create' or 'update' operations
					),
			),
		'divulgation_type' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'divulgation_title' => array(
				'notEmpty' => array(
						'rule' => array('notEmpty'),
						//'message' => 'Your custom message here',
						//'allowEmpty' => false,
						//'required' => false,
						//'last' => false, // Stop validation after this rule
						//'on' => 'create', // Limit validation to 'create' or 'update' operations
		
		
				)
		),
		'divulgation_description' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'participant_number' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'activity_place' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'adjunct' => array(
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
		'population_type_id' => array(
				'notEmpty' => array(
						'rule' => array('notEmpty'),
						//'message' => 'Your custom message here',
						//'allowEmpty' => false,
						//'required' => false,
						//'last' => false, // Stop validation after this rule
						//'on' => 'create', // Limit validation to 'create' or 'update' operations
				),
		),
		'divulgation_type_id' => array(
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
 * 
 * 
 */
	
	public $belongsTo = array(
			'Site' => array(
					'className' => 'Site',
					'foreignKey' => 'site_id',
					'conditions' => '',
					'fields' => '',
					'order' => ''
			),
			'User' => array(
					'className' => 'User',
					'foreignKey' => 'user_id',
					'conditions' => '',
					'fields' => '',
					'order' => ''
			),
			'PopulationType' => array(
					'className' => 'PopulationType',
					'foreignKey' => 'population_type_id',
					'conditions' => '',
					'fields' => '',
					'order' => ''
			),
			'Divtype' => array(
					'className' => 'Divtype',
					'foreignKey' => 'divulgation_type_id',
					'conditions' => '',
					'fields' => '',
					'order' => ''
			)
	);
	
	/**
	 * hasMany associations
	 *
	 * @var array
	 */
		
	public $hasAndBelongsToMany = array(
			'PerTrainer' => array(
					'className' => 'PerTrainer',
					'joinTable' => 'divulgations_trainers',
					'foreignKey' => 'divulgation_id',
					'associationForeignKey' => 'trainer_id',
					'unique' => 'keepExisting',
					'conditions' => '',
					'fields' => '',
					'order' => '',
					'limit' => '',
					'offset' => '',
					'finderQuery' => '',
			),
			'Thematic' => array(
					'className' => 'Thematic',
					'joinTable' => 'divulgations_thematics',
					'foreignKey' => 'divulgation_id',
					'associationForeignKey' => 'thematic_id',
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


