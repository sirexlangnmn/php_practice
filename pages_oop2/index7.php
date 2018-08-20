<?php
	include('includes/newclass7.inc.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>static function and static method</title>
</head>
<body>

<?php
	
	echo NewClass::$firstname . ' ';
	echo NewClass::$surname . '<br />';


	echo NewClass::staticMethod0() . ' ';
	echo NewClass::staticMethod1();

?>

</body>
</html>