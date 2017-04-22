<?php

$people[] = "Steve";
$people[] = "Kevin";
$people[] = "Kaveendra";
$people[] = "Love";
$people[] = "Tom";
$people[] = "Steven";
$people[] = "Stem";
$people[] = "Sativa";
$people[] = "Anal";


//get query string
$q = $_REQUEST['q'];
$suggestion = "";

//get suggestions
if($q!== ""){
	$q = strtolower($q);
	$len = strlen($q);
	foreach ($people as $person) {
		if(stristr($q, substr($person, 0, $len))){
			if($suggestion === ""){
				$suggestion = $person;
			}else{
				$suggestion .= ", $person";
			}
		}
	}
}

echo $suggestion === "" ? "no suggestions" : $suggestion;
?>