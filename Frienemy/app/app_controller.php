<?php

class AppController extends Controller {
	var $view = 'Theme';
	var $theme = 'blue_sapphire';
	var $components = array(
		'Session',
		'RequestHandler'
	);

	var $helpers = array(
		'Form',
		'Js',
		'Session',
		'Html'
	);

}
?>