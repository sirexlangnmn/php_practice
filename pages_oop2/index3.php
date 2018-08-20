<?php

	include('includes/newclass3.inc.php');

	// Topic: Fundamentals of Function, Properties, Methods, Public, Extends, protected, private, GETTER and SETTER

?>


<!DOCTYPE html>
<html>
<head>
	<title>GETTER and SETTER</title>
</head>
<body>

<?php
	
	$object = new NewClass();
	
	// echo $object->getData() . '<br />';  // Pag ito naman ang nauna, hindi nya babasahin yung data ng setter.

	$object->setData("This is New Data"); // Pag binura ito, default #data ang lalabas

	echo $object->getData();

?>

</body>
</html>