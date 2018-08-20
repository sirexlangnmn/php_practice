<?php
# Array - Variable that holds multiple values

/*
	- Indexed
	- Associative
	- Multi Dimensional
*/ 

# 1. Indexed
$people = array('Kevin', 'Jeremmy', 'Sara');
$ids = array(23, 55, 12);
$cars = ['Honda', 'Toyota', 'Ford'];
$cars[3] = "Chevy";
$cars[] = "BMW";

// echo count($cars);
// print_r($cars);
//var_dump($cars);

// echo $people[2] ." ". $ids[2] ." ". $cars[2];
// echo $ids[2];
// echo $cars[2];




# 2. Associative Arrays
$people2 = array('Brad' => 35, 'Jose' => 32, 'William' => 12);
// echo $people2['Brad'];
// print_r($people2);
//var_dump($people2);

$ids = [22 => 'Brad', 33 => 'Rex', 44 => 'Joyce'];
// echo $ids[33]

$people3['Rex'] = 55;
// echo $people3['Rex'];




# 3. Multiple-Dimensinal Array
 $cars = array(
 		array('Honda', 10, 11),
 		array('Toyota', 20, 22),
 		array('Ford', 30, 33)
 );

 echo $cars[1][2];
 // yung first bracket ay para sa horizontal data
 // yung 2nd bracket ay para sa vertical data











?>