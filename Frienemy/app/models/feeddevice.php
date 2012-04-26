<?php

//	feeddeviceid INT(10) NOT NULL
//	enabled TINYINT(1) NOT NULL DEFAULT 1
//	dateadded DATETIME DEFAULT NULL
//	dateupdated DATETIME DEFAULT NULL

class Feeddevice extends AppModel 
{
	var $name = 'Feeddevice';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasOne = array(
		'Feed' =>
			array(
			'className' => 'Feed',
			'foreignKey' => 'feeddevice_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'dependent' => false
			)
		,
		'Appdevice' =>
			array(
			'className' => 'Appdevice',
			'foreignKey' => 'feeddevice_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'dependent' => false
			)
	);

}

?>