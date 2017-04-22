<?php
	#LOOPS - Execute code set number of times

	/*
		- For
		- While
		- Do While
		- Foreach
	*/

	#For Loop
		for($i = 0; $i <= 10 ; $i++){
			echo 'Number '.$i;
			echo '<br>';
		}

	#While Loop
		$i = 0;
		while ($i <= 10) {
			echo $i;
			echo '<br>';
			$i++;
		}

	#Do-While Loop
		$i = 0;
		do{
			echo $i;
			echo '<br>';
			$i++;
		}while($i<10);

	#Foreach Loop for Arrays
		$people = array('Brad','Jose','William');
		foreach ($people as $person) {
			echo $person;
			echo '<br>';
		}

	#Assosiative Foreach Loop
		$people = array('Brad'=>'brand@gmail.com','Jose' => 'jose@gmail.com','William'=>'william@gmail.com');
		foreach ($people as $person => $email) {
			echo $person. ':' .$email;
			echo '<br>';
		}



?>