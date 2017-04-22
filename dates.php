<?php
	#DATE Function
	echo date('d '); // Day
	echo date('m '); // Month
	echo date ('Y '); // Year
	echo date('l '); // Day of the Week

	echo date('m/d/Y ');

	echo date('h '); // Hour
	echo date('i '); // Miniutes
	echo date('s '); // Seconds
	echo date('a '); //AM or PM

	//Set Time Zone
	date_default_timezone_set('Asia/Colombo');
	echo date('h:i:sa ');

	#make timer using mktime
	$timestamp = mktime(10,14,54,9,10,1981);
	//echo $timestamp;
	echo date('m/d/Y h:i:sa ', $timestamp);

	#Convert String to time
	$timestamp2 = strtotime('7:00pm March 22 2016');
	//echo $timestamp2;
	echo date('m/d/Y h:i:sa ',$timestamp2);

	$timestamp3 = strtotime('tomorrow');
	echo date('m/d/Y h:i:sa ',$timestamp3);
?>