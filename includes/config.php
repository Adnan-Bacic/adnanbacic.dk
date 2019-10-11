<?php
	//php info and version
	$version = 'production';
	//$version = 'development';
	switch($version){
		case 'development':
			// prints e.g. 'Current PHP version: 4.1.1'
			echo 'Current PHP version: ' . phpversion();

			echo '<br>';

			// prints e.g. '2.0' or nothing if the extension isn't enabled
			echo phpversion('tidy');

			phpinfo();
			break;
		
		case 'production':
			break;
			
		default:
			
	}
?>