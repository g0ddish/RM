<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Third Party Services
	|--------------------------------------------------------------------------
	|
	| This file is for storing the credentials for third party services such
	| as Stripe, Mailgun, Mandrill, and others. This file provides a sane
	| default location for this type of information, allowing packages
	| to have a conventional place to find your various credentials.
	|
	*/

	'mailgun' => array(
		'domain' => 'sandboxc458fbb1f49d4321ad8fdfafeb578626.mailgun.org',
		'secret' => 'key-27f141ceb8ebd4ca3e16d5baf48e51b0',
	),

	'mandrill' => array(
		'secret' => 'CMAGVPqfRB0qaEhNCDsF8A',
	),

	'stripe' => array(
		'model'  => 'User',
		'secret' => '',
	),

);
