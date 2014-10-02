<?php
App::uses('AppModel', 'Model');
/**
 * Zone Model
 *
 * @property Agent $Agent
 * @property Commune $Commune
 */
class Zone extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'id_zone';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'zone_name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'zone_name' => array(
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
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Agent' => array(
			'className' => 'Agent',
			'foreignKey' => 'zone_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Commune' => array(
			'className' => 'Commune',
			'foreignKey' => 'zone_id',
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

}
