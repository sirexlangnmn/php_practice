<?php 
	session_start();

	$name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest' ;
	$email = isset($_SESSION['email']) ? $_SESSION['email'] : 'Not Subscribed';
?>


<!DOCTYPE html>
<html>
<head>
	<title>Session Page 2</title>
</head>
<body>

<h1>Hello <?php echo $name; ?></h1>
<h1>Your username is <?php echo $email; ?></h1>
<a type="button" href="page3.php">Go to Page 3</a>
</body>
</html>