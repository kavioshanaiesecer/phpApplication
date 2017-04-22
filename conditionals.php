<?php
	#CONDITIONALS
	
	/*
		== -equals only values
		=== - identicals value & data types
		<
		>
		<=
		>=
		!= - not equal
		!== - not identical
	*/

	#Basic If Statements

	$num = 35;
	if($num == 5){
		echo '5 passed';
	}
	elseif ($num == 35) {
		echo 'Passed';
	}
	else {
		echo 'didnot passed';
	}

	#Nested If Statements

	$num = 6;
	if($num >5){
		if($num < 10){
			echo "$num passed";
		}
	}

	/*
		Logical Operators
			and &&
			or ||
			xor
	*/

	if($num > 4 AND $num < 10){
		echo "$num Passed";
	}		

	#Switches
		$favcolor = 'green';
		switch ($favcolor) {
			case 'red':
				echo 'Your Favourite Color is Red';
				break;

			case 'blue':
				echo 'Your Favourite Color is Blue';
				break;

			case 'green':
				echo 'Your Favourite Color is Green';
				break;
			
			default:
				echo 'Default Color is something else';
		}


?>