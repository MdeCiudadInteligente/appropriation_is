<?php
App::uses('AppModel', 'Model');
/**
 * Accompaniment Model
 *
 * @property Site $Site
 */
class Accompaniment extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'id_accompaniment';
	var $actsAs = array(
			'MeioUpload.MeioUpload' => array('accompaniment_adjunct2','accompaniment_adjunct1','accompaniment_adjunct')
	);
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id_accompaniment';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'accompaniment_title' => array(
					'notEmpty' => array(
							'rule' => array('notEmpty'),
							//'message' => 'Your custom message here',
							//'allowEmpty' => false,
							//'required' => false,
							//'last' => false, // Stop validation after this rule
							//'on' => 'create', // Limit validation to 'create' or 'update' operations
								
						
					)
		),
		'accompaniment_date' => array(
					'notEmpty' => array(
							'rule' => array('notEmpty'),
							//'message' => 'Your custom message here',
							//'allowEmpty' => false,
							//'required' => false,
							//'last' => false, // Stop validation after this rule
							//'on' => 'create', // Limit validation to 'create' or 'update' operations
					),
			),
		'accompaniment_description' => array(
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
			/*'numeric' => array(
				//'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),*/
		),
		'accompaniment_adjunct' => array(
			'rule'=>'Empty',
			'required' => false,
			'allowEmpty' => true
		),
		'accompaniment_adjunct1' => array(
		    'rule'=>'Empty',
		    'required' => false,
		    'allowEmpty' => true
		),
		'accompaniment_adjunct2' => array(
		   'rule'=>'Empty',
		   'required' => false,
		   'allowEmpty' => true
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
		'user_id' => array(
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
		'AccType' => array(
					'className' => 'AccType',
					'foreignKey' => 'accompaniment_type_id',
					'conditions' => '',
					'fields' => '',
					'order' => ''
		)
	);
}
