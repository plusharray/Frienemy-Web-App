<?php

//	appdeviceid INT(10) NOT NULL
//	dateadded DATETIME DEFAULT NULL
//	dateupdated DATETIME DEFAULT NULL
//	launchcount INT(10) NOT NULL
//	deviceactive TINYINT(1) NOT NULL DEFAULT 1

class Appdevice extends AppModel 
{
	var $name = 'Appdevice';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasOne = array(
		'App' =>
			array(
			'className' => 'App',
			'foreignKey' => 'appdevice_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'dependent' => false
			)
		,
		'Device' =>
			array(
			'className' => 'Device',
			'foreignKey' => 'appdevice_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'dependent' => false
			)
	);

}

?>