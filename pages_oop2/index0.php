<?php
	include('includes/newclass0.inc.php');
	include('includes/parentclass0.inc.php');

	$object1 = new NewClass();
	$object2 = new ParentClass();


	// Topic: Fundamentals of Function, Properties, Methods, Public
?>


<!DOCTYPE html>
<html>
<head>
	<title>FUNDAMENTALS</title>
</head>
<body>

<?php
	echo '<br />' . $object1->info;
	echo '<br />' . $object2->info;
?>

</body>
</html>