<?php

	#doesn't return a value
	#echo 'Hello World';

	#return a value
	#print 'Hello World - Print';

	/*
		Multiline Comments
	*/

	#Variables
		/*
			-prefix $
			-start with a letter or underscore (_)
			-only letters, numbers and underscores
			-case sensitive
		*/

	#DATA TYPES
		/*
			String
			Integers
			floats
			Booleans
			Arrays
			Objects
			NULL
			Resource
	
		*/
 
	$output = 'Kaveendra Oshan';
	$num1 = 4;
	$num2 = 10;
	$sum = $num1+$num2;

	$stirng1 = 'Hello';
	$string2 = 'World';
	#PHP uses DOT (.) to concatinate string variables together
	$greeting = $stirng1 .' '. $string2;
	#$greeting2 = "$string1 $stirng2";

	$float1 = 4.4;
	$boolean1 = true;

	#CONSTANTS
	define('GREETING','Hello Everyone');
	echo GREETING;		


?>
