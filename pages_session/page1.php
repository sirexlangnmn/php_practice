<?php
	if(isset($_POST['submit'])){
		session_start();  // Start the Session

		$_SESSION['name'] =htmlentities($_POST['name']);
		$_SESSION['email'] =htmlentities($_POST['email']);
		
		header('Location: page2.php');	
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Session Page 1</title>

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
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ?  $name : ''; ?>">
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="email" name="email" class="form-control" value="<?php echo isset($_POST['email']) ?  $email : ''; ?>">
		</div>	
		<br />
		<button type="submit" name="submit" class="btn btn-primary">Submit</button>		
	</form>
</div>

</body>
</html> 