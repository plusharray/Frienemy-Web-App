<?php

//	subscriptionname VARCHAR(50) NOT NULL
//	appsubscriptionid INT(10) NOT NULL

class Appsubscription extends AppModel 
{
	var $name = 'Appsubscription';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasOne = array(
		'App' =>
			array(
			'className' => 'App',
			'foreignKey' => 'appsubscription_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'dependent' => false
			)
	);

}

?>