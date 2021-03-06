<?php
	//$environment = 'production';
	$environment = 'development';
	switch($environment){
		case 'development':
			ob_start();
			session_start();
			print_r($_SESSION);
			echo '<br>';
			// prints e.g. 'Current PHP version: 4.1.1'
			echo 'Current PHP version: ' . phpversion();

			echo '<br>';

			// prints e.g. '2.0' or nothing if the extension isn't enabled
			echo phpversion('tidy');

			//phpinfo();

			//PHP errors
			echo 'ERRORS:' . '<br>';
			ini_set('display_errors', 1);
			ini_set('display_startup_errors', 1);
			error_reporting(E_ALL);
			break;
		
		case 'production':
			ob_start();
			session_start();
			break;
			
		default:
			die('<h1>No environment set</h1>');
			break;
			
	}
?>