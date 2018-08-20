<?php

	// Message Vars
		$msg = '';
		$msgClass = '';



	// Check for Submit
	if(filter_has_var(INPUT_POST, 'submit')){
		$name = htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);
		$message = htmlspecialchars($_POST['message']);

		//Check Required Fields
		if(!empty($name) && !empty($email) && !empty($message)){
			// Passed
			// Check Email
			if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
				// Failed
				$msg = 'Please use valid email';
				$msgClass = 'alert-danger';	
			}
		} else {
			// Passed
			$toEmail = 'potolin.federex@gmail.com';
			$subject = 'ontact Request From '.$name;
			$body = '<h2>Contact Request</h2>
					<h4>Name</h4> '.$name.' </p>
					<h4>Email</h4> '.$email.' </p>
					<h4>Message</h4> '.$message.' </p>
			';

			// Email Headers
			$headers = "MIME-Version: 1.0" ."\r\n";
			$headers .= "Content-Type:text/html;charset=UTF-8" . "\r\r";

			// Additional Headers
			$headers .= "From: " .$name. "<" .$email.">". "\r\n";

			if(mail($toEmail, $subjet, $body, $headrs)){
				// Email Sent
				$msg = 'Your Email has been sent';
				$msgClass = 'alert-success';	

			} else{
				$msg = 'Your email was not sent';
				$msgClass = 'alert-danger';	
			}
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>

	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	<a class="navbar-brand" href="#">Navbar</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarColor01">
	    <ul class="navbar-nav mr-auto">
	      	<li class="nav-item active">
	        	<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
	      	</li>
		    <li class="nav-item">
		        <a class="nav-link" href="#">Features</a>
		    </li>
		    <li class="nav-item">
		        <a class="nav-link" href="#">Pricing</a>
		    </li>
		    <li class="nav-item">
		        <a class="nav-link" href="#">About</a>
		    </li>
		</ul>
	    <form class="form-inline my-2 my-lg-0">
	    	<input class="form-control mr-sm-2" type="text" placeholder="Search">
	      	<button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
	    </form>
	</div>
</nav>

<nav class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
			<a href="" class="navbar-brand">Contact Us</a>
		</div>
	</div>
</nav>

<div class="container">
	<?php if($msg != ''): ?>
		<div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
	<?php endif; ?>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ?  $name : ''; ?>">
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="email" name="email" class="form-control" value="<?php echo isset($_POST['email']) ?  $email : ''; ?>">
		</div>	
		<div class="form-group">
			<label>Message</label>
			<textarea name="text" value="<?php echo isset($_POST['message']) ?  $message : ''; ?>" class="form-control">
			<?php echo isset($_POST['message']) ?  $message : ''; ?>
			</textarea>
		</div>
		<br />
		<button type="submit" name="submit" class="btn btn-primary">Submit</button>		
	</form>
</div>

</body>
</html> 