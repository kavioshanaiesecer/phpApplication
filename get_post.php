<?php 
	#checking whether the data is set
	#in GET Function Data is passed through URL
	if(isset($_GET['name'])) {
		$name = htmlentities($_GET['name']);
		//echo $name;
		//print_r($_GET);
	}

	#in POST Function Data is passed through headers
	if(isset($_POST['name'])){
		//$name = htmlentities($_POST['name']);
		//echo $name;
		//print_r($_POST);
	}

	#Using Request method is an alternative way to get user global values
	if(isset($_REQUEST['name'])){
		//$name = htmlentities($_REQUEST['name']);
		//echo $name;
		//print_r($_REQUEST);
	}
	
	#gives the entire string/next key value pair.
	//echo $_SERVER['QUERY_STRING'];

	
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
</head>
<body>
	<form method="GET" action="get_post.php">
		
		<div>
			<label>Name</label><br>
			<input type="text" name="name">
		</div>

		<div>
			<label>Email</label><br>
			<input type="text" name="email">
		</div>

		<input type="submit" value="Submit">
	</form>

	<ul>
		<li>
			<a href="get_post.php?name=Brad">Brad</a>
		</li>
		<li>
			<a href="get_post.php?name=Kavee">Kavee</a>
		</li>
		<li>
			<a href="get_post.php?name=Steve">Steve</a>
		</li>
	</ul>
	<h1><?php echo "{$name} Profile;"?></h1>

</body>
</html>