<?php

//	passphrase VARCHAR(50) NOT NULL
//	certificatename VARCHAR(50) NOT NULL
//	keycertfile VARCHAR(50) NOT NULL
//	certificateid INT(10) NOT NULL

class Certificate extends AppModel 
{
	var $name = 'Certificate';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasOne = array(
		'Certificatetype' =>
			array(
			'className' => 'Certificatetype',
			'foreignKey' => 'certificate_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'dependent' => false
			)
		,
		'App' =>
			array(
			'className' => 'App',
			'foreignKey' => 'certificate_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'dependent' => false
			)
	);

}

?>