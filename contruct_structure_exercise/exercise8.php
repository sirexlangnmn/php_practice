<?php 

// Default Arguments

// Default arguments can be defined for the function arguments.
// In the example below, we're calling the function setCounter(). 
// There are no arguments, so it will take on the default values that have been defined.


function setCounter($num=10) {
   echo "Counter is ".$num;
}
setCounter(42);  //Counter is 42
setCounter();  //Counter is 10

?>