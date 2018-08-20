<?php
	# FUNCTION - Block of code that can be repeatedly called

	/*
		Camel Case = myFunction()
		Lower Case = my_function()
		Pascal Case = MyFunction()
	*/


	# Create Simple Function
		function simpleFunction(){
			echo 'Hello World';
		}

	# Run Simple Function
	//	simpleFunction();	




	# Function with Param
	/*
		sayHello('Rex');
		sayHello('Joyce');

		function sayHello($name){
			echo "Hello $name<br>";
		}
	*/

		
	# If without Parameter, you can assign default value. BuT if there's a value, it overwrite the default value.
	
	 /*
	 	sayHello('Rex Pogi');
		sayHello();
	

		function sayHello($name = 'No Data Available'){
			echo "Hello $name<br>";
		}
	*/
	

	/*
		function addNumbers($num1, $num2){
			echo $num1 + $num2;
		}

		addNumbers(2,3);
	*/


	/*
		function addNumbers($num1, $num2){
			return $num1 + $num2;
		}

		echo addNumbers(5,7);
	*/


	/*
		$myNum = 10;

		function addFive($num){
			$num += 5;
		}

		function addTen(&$num){
			$num += 10;
		}

		addFive($myNum);
		echo "Value: $myNum";

		echo '<br>';

		addTen($myNum);
		echo "Value: $myNum";

	*/


?>