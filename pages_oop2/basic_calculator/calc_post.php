
<?php

	include('calc_func.php');


$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$mdas = $_POST['mdas'];


$calculator = new Calculate($num1, $num2, $mdas);

echo $calculator->calcMethod();
?>