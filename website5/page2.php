<?php

	/*
	//update cookies
	setcookie('username','Grant',time()+(86400 *30));

	//unset cookies
	setcookie('username','Grant',time()-3600);
	*/

	if(count($_COOKIE)>0){
		echo 'There are '.count($_COOKIE). ' cookies saved <br>';
	}else{
		echo "There are no Cookies saved <br>";
	}

	if(isset($_COOKIE['username'])){
		echo  'User '.$_COOKIE['username'] . ' is set <br>';
	}
	else{
		echo 'user is not set';
	}

?>