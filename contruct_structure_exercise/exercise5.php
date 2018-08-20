<?php

// Using the for loop, print only the even numbers between 0 and 10.

for ($i=0; $i<=10;$i++) {
    if ($i%2 != 0) {
 		continue;
    }
    echo $i."<br/>";
}

??