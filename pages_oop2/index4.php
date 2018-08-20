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
	
	$object1 = new NewClass();
	$object2 = new NewClass();
	
	// echo $object->getData() . '<br />';  // Pag ito naman ang nauna, hindi nya babasahin yung data ng setter.
	// Dalawang yung input data ni setter, dalawa din ang get data ni getter

	$object1->setData("Your usernmae is : sirexlangnaman"); 
	$object2->setData("Your email is : sirexlangnaman@gmail.com"); 

	echo '<br />'.$object1->getData();
	echo '<br />'.$object2->getData();

?>

</body>
</html>