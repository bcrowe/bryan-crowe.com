<?php
App::uses('AppModel', 'Model');
App::uses('Security', 'Utility');
/**
 * User Model
 *
 * @property Post $Post
 */
class User extends AppModel {

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Post' => array(
			'className' => 'Post',
			'foreignKey' => 'user_id',
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

	public function beforeSave($options = array()) {
		if (isset($this->data['User']['password'])) {
			$hash = Security::hash($this->data['User']['password'], 'blowfish');
			$this->data['User']['password'] = $hash;
		}
		return true;
	}

}
