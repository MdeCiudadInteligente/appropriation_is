<?php
App::uses('AppModel', 'Model');
/**
 * SiteType Model
 *
 * @property population $Population
 */
class PopulationType extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'id_population_type';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				
			),
		),		
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */	

	//Falta la relación de tipo de divulgación con formación...
	public $hasMany = array(
		'Divulgation' => array(
			'className' => 'Divulgation',
			'foreignKey' => 'population_type_id',			
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
