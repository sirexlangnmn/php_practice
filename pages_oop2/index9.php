<?php

	include('includes/newclass9.inc.php');

?>


<!DOCTYPE html>
<html>
<head>
	<title>Initialize Object Property part 2</title>
</head>
<body>

<?php
	
	$users = new Users('Federex', 'Potolin', 'Black', 'Brown');
	$users1 = new Users('Joyce', 'Vallesta', 'Blond', 'Blue');
	$users2 = new Users('Kien', 'Dolorfo', 'Brown', 'Green');

	echo $users1->userData();

?>

</body>
</html>