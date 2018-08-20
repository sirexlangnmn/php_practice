<?php

	include('includes/newclass8.inc.php');

?>


<!DOCTYPE html>
<html>
<head>
	<title>Initialize Object Property part 1</title>
</head>
<body>

<?php
	
	$users = new Users;

	echo $users->firstname;

?>

</body>
</html>