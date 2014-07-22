<?php
App::uses('AppModel', 'Model');
/**
 * Neighborhood Model
 *
 * @property Commune $Commune
 * @property Site $Site
 */
class Neighborhood extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'id_neighborhood';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'neighborhood_name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'neighborhood_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'commune_id' => array(
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
		'Commune' => array(
			'className' => 'Commune',
			'foreignKey' => 'commune_id',
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
	public $hasMany = array(
		'Site' => array(
			'className' => 'Site',
			'foreignKey' => 'neighborhood_id',
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
