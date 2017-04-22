<?php 
	$loggedIn = false;
	$arr = [12,34,56,78];

	/*
	if($loggedIn){
		echo 'You are logged in';	
	} else {
		echo 'You are NOT logged in';
	}
	*/

	#Ternary Operator
	//echo ($loggedIn) ? 'You are logged in' : 'You are NOT Logged';

	#If condtion & Ternary Operation
	$isRegistered = ($loggedIn == true) ? true : false;
	echo $isRegistered; 

	$age = 20;
	$score = 15;

	echo 'Your Score is: '.($score > 10 ? ($age > 10 ? 'Average' : 'Exeptional'):($age > 10 ? 'Horrible' : 'Average'));
?>

<div>
	<?php if($loggedIn) { ?>
		<h1> Welcome User </h1>
	<?php } else { ?>
		<h1> Welcome Guest </h1>
	<?php } ?>
</div>

<div>
	<?php foreach ($arr as $val) : ?>
		<?php  echo $val; ?>
	<?php endforeach; ?>
</div>
