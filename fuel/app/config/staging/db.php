<?php
/**
 * The staging database settings. These get merged with the global settings.
 */

return array(
	'default' => array(
		'connection'  => array(
			'dsn'        => 'mysql:host=localhost;dbname=test_deploy',
			'database'	 => 'test_deploy',
			'username'   => 'test_deploy',
			'password'   => 'test_deploy',
		),
	),
);
