<?php 

	// Information can be passed to functions through arguments, which are like variables.
	// Arguments are specified after the function name, and within the parentheses.
	// Here, our function takes a number, multiplies it by two, and prints the result:

    function multiplyByTwo($number) {
        $answer = $number * 2;
        echo $answer;
    }
    multiplyByTwo(5);

    // output : 10




   	// You can add as many arguments as you want, as long as they are separated with commas.
	
	function multiply($num1, $num2) {
	  echo $num1 * $num2;
	}
	multiply(3, 6);

	//Outputs 18


/*	
When you define a function, the variables that represent the values that will be passed to it for processing are called "parameters". However, when you use a function, the value you pass to it is called an "argument".
*/


?>