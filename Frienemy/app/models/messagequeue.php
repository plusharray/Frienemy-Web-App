<?php

//	message VARCHAR(50) NOT NULL
//	badge INT(10) NOT NULL
//	messageid INT(10) NOT NULL
//	dateadded TIMESTAMP NOT NULL
//	sound VARCHAR(50) NOT NULL
//	status INT(10) NOT NULL

class Messagequeue extends AppModel 
{
	var $name = 'Messagequeue';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasOne = array(
		'Device' =>
			array(
			'className' => 'Device',
			'foreignKey' => 'messagequeue_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'dependent' => false
			)
		,
		'Certificate' =>
			array(
			'className' => 'Certificate',
			'foreignKey' => 'messagequeue_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'dependent' => false
			)
	);

}

?>