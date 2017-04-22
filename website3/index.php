<?php
	#Message Variables -
		$msg = '';
		$msgClass = '';
	#check for submit
	if(filter_has_var(INPUT_POST,'submit')){
		//echo 'Submitted';
		#Get Form Data
		$name = htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);
		$message = htmlspecialchars($_POST['message']);

		#Check Required Fields (Validations)
		if (!empty($email) && !empty($name) && !empty($message)) {
			//echo 'PASSED';
			#validating email
			if (filter_var($email,FILTER_VALIDATE_EMAIL) == false) {
				$msg = 'Please use a valid email';
				$msgClass = 'alert-danger';
			}
			else{
				//Recipient Email
				$toEmail = 'kavi.oshan8@gmail.com';
				$subject = 'Contact Request From '.$name;
				$body = '<h2>Contact Request</h2>
						<h4>Name</h4><p>'.$name.'</p>
						<h4>Name</h4><p>'.$email.'</p>
						<h4>Name</h4><p>'.$message.'</p>

				';

				//Email Headers
				$headers = "MIME-Version: 1.0"."\r\n";
				$headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

				//Additional Headers
				$headers .= "From: ".$name."<".$email.">". "\r\n";

				if(mail($toEmail,$subject, $headers)){
					$msg = 'Email has sent successfully!';
					$msgClass = 'alert-success';
				}
				else{
					$msg = 'Your Email was not sent!';
					$msgClass = 'alert-danger';
				}	
			}
		}
		else{
			$msg = 'Please fill all fields';
			$msgClass = 'alert-danger';
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/cosmo/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">My Website</a>
			</div>			
		</div>		
	</nav>

<div class="container">

	<?php if($msg != ''): ?>
		<div class="alert <?php echo $msgClass; ?>"> <?php echo $msg; ?> </div>
	<?php endif; ?>
 
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<div class="form-group">
			<label>Name</label>
			<input type="text" class="form-control" name="name" value="<?php echo isset($_POST['name'])? $name: ''; ?>">
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="text" class="form-control" name="email" value="<?php echo isset($_POST['email'])? $email: '';  ?>">
		</div>
		<div class="form-group">
			<label>Message</label>
			<textarea name="message" class="form-control"><?php echo isset($_POST['message'])? $message: ''; ?></textarea>
		</div>
		<br>
		<button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
	</form>
</div>
</body>
</html>