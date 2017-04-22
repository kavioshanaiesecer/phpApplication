<?php

	$user = ['name' => 'Brad', 'email'=>'brad@gmail.com', 'age'=>27];

	//array should be seriallized before using arrays in cookies
	$user = serialize($user);

	setcookie('user', $user, time()+(86400*30));

	$user = unserialize($_COOKIE['user']);

	//echo $user['name'];
	print_r($user);

?>