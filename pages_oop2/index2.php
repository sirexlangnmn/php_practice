<?php
	/*
		Note: Kung gagamit ng extends, dapat nasa taas o unahan yung class na pinagmumulan ng data. (Include Pattern)
		Logic, Waterfall reaction. 
		Mag mumula sa taas yun data tapos itatapon sa ibaba kung saan naka extends yun class. 
		Sa example na ito. Galing sa ParentClass yun data, tapos extended kay NewClass. 
		Tapos mula kay NewClass, ibibgay nya sa index.php 
	*/
	include('includes/parentclass2.inc.php');
	include('includes/newclass2.inc.php');

	$object = new NewClass();

	// Topic: Fundamentals of Function, Properties, Methods, Public, Extends, PROTECTED

?>


<!DOCTYPE html>
<html>
<head>
	<title>PROTECTED</title>
</head>
<body>

<?php
	echo $object->get_parent_class_info();
	// Function from class NewClass
?>

</body>
</html>