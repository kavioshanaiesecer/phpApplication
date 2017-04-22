<?php
	# $_SERVER SUPERGLOBAL - SYSTEM VARIABLES - Holds information about server/client paths/client ip address & etc

	//Create Server Array
		$server = [
			'Host Server Name' => $_SERVER['SERVER_NAME'],
			'Host Header' => $_SERVER['HTTP_HOST'],
			'Server Software' => $_SERVER['SERVER_SOFTWARE'],
			'Document Root' => $_SERVER['DOCUMENT_ROOT'],
			'Current Page' =>$_SERVER['PHP_SELF'],
			'Script Name' => $_SERVER['SCRIPT_NAME'],
			'Absolute Path' => $_SERVER['SCRIPT_FILENAME']
		];
		//echo "SERVER ARRAY <br>";
		//echo $server['Server Software'];

		//print_r($server);
		//echo '<br>';

	//Create Client Array
		$client = [
			'Client System Info' =>$_SERVER['HTTP_USER_AGENT'],
			'Client IP' => $_SERVER['REMOTE_ADDR'],
			'Client Remote Port' => $_SERVER['REMOTE_PORT']
		];

		//echo "CLIENT ARRAY <br>";
		//print_r($client);


?>