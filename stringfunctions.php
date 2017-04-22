<?php
	
	#substr()
	#Returns a portion of string
	$output = substr('Hello', 1);
	echo $output;
	echo '<br>';

	#strlen()
	#Return the length of String
	$output = strlen('Hello World');
	echo $output;
	echo '<br>';

	#strpos()
	#Find the position of first occurance of sub string
	$output = strpos('Hello World', 'o');
	echo $output;
	echo '<br>';

	#strrpos()
	#Find the position of last occurance of sub string
	$output = strrpos('Hello World', 'o');
	echo $output;
	echo '<br>';

	#trim()
	#Strips whitespace / Remove White Spaces
	$text = 'Hello World            ';
	var_dump($text);
	echo '<br>';
	$trimmed = trim($text);
	var_dump($trimmed);
	echo '<br>';

	#strtoupper
	#Makes everything to uppercase
	$output = strtoupper('Hello World');
	echo $output;
	echo '<br>';

	#strtolower
	#Makes everything to lowercase
	$output = strtolower('Hello World');
	echo $output;
	echo '<br>';

	#ucwords()
	#Capitalize everyword in begining word
	$output = ucwords('hello world');
	echo $output;
	echo '<br>';

	#str_replace()
	#Replace all occurance of a search string with a replacement
	$text ='Hello World';
	$output = str_replace('World', 'Everyone', $text);
	echo $output;
	echo '<br>';

	#is_string()
	#Check whether if String
	$val = 'hello';
	$output = is_string($val);
	echo $output;
	echo '<br>';
	
	$values = [true,false,null,'abc',33,'33',22.4,'44.4',0,' ','0'];
	foreach ($values as $value) {
		if(is_string($value)){
			echo $value." is a string <br>";
		}
	}

	#gzcompress()
	#Compress a String
	$string = "Knowing that millions of people around the world would be watching in person and on television and expecting great things from him — at least one more gold medal for America, if not another world record — during this, his fourth and surely his last appearance in the World Olympics, and realizing that his legs could no longer carry him down the runway with the same blazing speed and confidence in making a huge, eye-popping leap that they were capable of a few years ago when he set world records in the 100-meter dash and in the 400-meter relay and won a silver medal in the long jump, the renowned sprinter and track-and-field personality Carl Lewis, who had known pressure from fans and media before but never, even as a professional runner, this kind of pressure, made only a few appearances in races during the few months before the Summer Olympics in Atlanta, Georgia, partly because he was afraid of raising expectations even higher and he did not want to be distracted by interviews and adoring fans who would follow him into stores and restaurants demanding autographs and photo-opportunities, but mostly because he wanted to conserve his energies and concentrate, like a martial arts expert, on the job at hand: winning his favorite competition, the long jump, and bringing home another Gold Medal for the United States, the most fitting conclusion to his brilliant career in track and field.";

	$compressed = gzcompress($string);
	echo $compressed;
	echo '<br>';

	#uncompressing gzcompress
	$original = gzuncompress($compressed);
	echo $original;


?>