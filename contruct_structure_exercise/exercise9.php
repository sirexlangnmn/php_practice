
<?php

/*Return

A function can return a value using the return statement.
Return stops the function's execution, and sends the value back to the calling code.
For example:*/


function mult($num1, $num2) {
  $res = $num1 * $num2;
  return $res;
}

echo mult(8, 3);
// Outputs 24

/*
Leaving out the return results in a NULL value being returned.
A function cannot return multiple values, but returning an array will produce similar results.
*/
?>