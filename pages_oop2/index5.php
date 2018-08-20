<?php

	include('includes/newclass5.inc.php');

	// Topic: Fundamentals of Constructor and Destructor

?>


<!DOCTYPE html>
<html>
<head>
	<title>Constructor and Destructor</title>
</head>
<body>

<?php
	
	$object = new NewClass();

	unset($object);  // Function that will go ahead and unset or destroy the object inside the parenthesis.
					 // We will get an error because we destroy the object.	

	echo $object->getData();

?>

</body>
</html>