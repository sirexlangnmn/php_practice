<?php

// Fill in the blanks to print all the numbers from 0 to 15, except for the numbers 10 and 14.

for ($i=0; $i<=15;$i++) {
  if ($i==10 || $i==14) {
	continue;
  }
  echo $i."<br />";
}

?>