<?php
App::uses('AppModel', 'Model');
/**
 * Diariocampo Model
 *
 * @property acompanamiento $acompanamiento
 * @property reunion $reunion
 */
class Diariocampo extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'diariocampo';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'iddiariocampo';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'iddiariocampo';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'iddiariocampo' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'ced_empleado' => array(
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
		'acompanamiento' => array(
			'className' => 'acompanamiento',
			'foreignKey' => 'id_drc',
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
		'reunion' => array(
			'className' => 'reunion',
			'foreignKey' => 'id_drcp',
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
