<?php

/*
The continue Statement

When used within a looping structure, the continue statement allows for skipping over what remains of the current loop iteration. It then continues the execution at the condition evaluation and moves on to the beginning of the next iteration.

The following example skips the even numbers in the for loop:
*/


for ($i=0; $i<10; $i++) {
  if ($i%2==0) {
    continue;
  }
  echo $i . ' ';
}

//Output: 1 3 5 7 9


// You can use the continue statement with all looping structures.
?>