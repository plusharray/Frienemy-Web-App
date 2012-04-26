<?php

//	dateupdated DATETIME DEFAULT NULL
//	subscriptionenabled TINYINT(1) NOT NULL DEFAULT 1
//	appdevicesubscriptionid INT(10) NOT NULL
//	dateadded DATETIME DEFAULT NULL

class Appdevicesubscription extends AppModel 
{
	var $name = 'Appdevicesubscription';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasOne = array(
		'Device' =>
			array(
			'className' => 'Device',
			'foreignKey' => 'appdevicesubscription_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'dependent' => false
			)
		,
		'Appsubscription' =>
			array(
			'className' => 'Appsubscription',
			'foreignKey' => 'appdevicesubscription_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'dependent' => false
			)
	);

}

?>