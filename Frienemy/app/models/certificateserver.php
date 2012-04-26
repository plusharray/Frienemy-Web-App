<?php

//	certificateserverid INT(10) NOT NULL

class Certificateserver extends AppModel 
{
	var $name = 'Certificateserver';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasOne = array(
		'Server' =>
			array(
			'className' => 'Server',
			'foreignKey' => 'certificateserver_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'dependent' => false
			)
		,
		'Certificate' =>
			array(
			'className' => 'Certificate',
			'foreignKey' => 'certificateserver_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'dependent' => false
			)
	);

}

?>