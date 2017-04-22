<?php
	#Function is a block of code repeatedly called

	/*
		Camel Case - myFunction() -> functions
		LowerCase - my_function() -> functions
		Pascal Case - MyFunction() -> mainly uses for classes
	*/

	#Create Simple Function
	function simpleFunction(){
		echo 'Hello World <br>';
	}

	#Run Simple Function
	simpleFunction();

	#Function with parameters
	function sayHello($name){
		echo 'Welcome '.$name.'<br>';
	}

	#function callings with parameters
	sayHello('Kaveendra');
	sayHello('Joel');

	#Return Value
	function addNumbers($num1, $num2){
		return $num1 + $num2;
	}

	echo addNumbers(2,3);

	#Passing by reference
	$myNum = 10;

	function addFive($num){
		$num += 5;
	}

	function addTen(&$num){
		$num += 10;
	}

	addFive($myNum);
	echo 'Value: '.$myNum.'<br>';

	addTen($myNum);
	echo 'Value: '.$myNum.'<br>';
?>