<?php

// What output results from the following code?
function func($arg)  {
  $result = 0;
  for($i=0; $i<$arg; $i++) {
    $result = $result + $i;
  }
  return $result;
}
echo func(5);


//  output: 10

?>