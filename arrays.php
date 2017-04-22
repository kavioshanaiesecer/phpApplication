<?php
	#Array - Variable that holds multiple values
	/*
		-Indexed
		-Assosiative
		-Multi-dimensional
	*/

	#Indexed Array ----->
		$people = array('Kevin','Jeremy','Sara','Oliver');
		//echo $people[3];
		$ids = array(23,34,55,12);
		//echo $ids[2];
		$cars = ['Honda','Toyota','Ford'];
		$cars[3] = 'Chevy';
		//if index doesn't know
		$cars[] = 'BMW';
		//echo $cars[4];

		#print number of cars in the array
		//echo count($cars);
		
		#print the whole array
		//print_r($cars);
		
		#variable identification
		//var_dump($cars);

	#Assosiative Array ----> Key & Value
		$people = array('Brad'=>35, 'Jose'=>32, 'William' => 37);
		$ids = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];
		
		//echo $people['Brad'];
		//echo $ids[22];

		$people['Jill'] = 42;
		//echo $people['Jill'];
		//print_r($people);
		//var_dump($people);

	#Multi-Dimentional Array ------>
		$cars = array(
			array('Honda',20,10),
			array('Toyota',30,20),
			array('Ford',23,12),
			array('BMW',26,15)
		);

		echo $cars[1][2];

?>