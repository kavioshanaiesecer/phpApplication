<?php
	session_start();
	//$_SESSION['name'] = 'John Doe';
	$name = $_SESSION['name'];
	$email = $_SESSION['email'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>
		PHP SESSIONS
	</title>
</head>
<body>
<h5>Thank You <?php echo $name; ?>, You have subscribe with the email <?php echo $email; ?></h5>
<a href="page3.php">GO to Page 3</a>
</body>
</html>