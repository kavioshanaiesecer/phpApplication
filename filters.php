<?php
	#Check for posted data
	if(filter_has_var(INPUT_POST,'data')){
			echo "Data Found!!!";
	}else{
			echo "No Data";
	}

	#validate as email address
	if(filter_has_var(INPUT_POST,'data')){
		$email = $_POST['data'];
		//remove illegal charactor
		$email = filter_var($email,FILTER_SANITIZE_EMAIL);
		echo $email. '<br>';
			if(filter_var($email,FILTER_VALIDATE_EMAIL)){
				echo 'Email is Valid';
			} else{
				echo "Email is not valid";
			}
	}

?>



<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<input type="text" name="data">
	<button type="submit">Submit</button>
</form>