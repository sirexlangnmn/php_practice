<?php
	# CONDITIONALS

	/*
		==
		===
		<
		>
		<=
		>=
		!=
		!==
	*/


	/*
		$num = 5;   // Test value only

		if($num == 5){
			echo '5 Passed';
		}
	*/



# Test for identical. Exact the same. Including date type
	/*
		$num = '5';  // Test value and data type

		if($num === 5){
			echo '5 Passed';
		}
	*/



	/*
		$num = 5;

		if($num >= 5){
			echo '5 Passed';
		}
	*/
	


	/*
		$num = 0;

		if($num >= 3 && $num <= 5){
			echo 'Fair';
		}elseif($num >= 1 && $num <= 3){
			echo 'Poor';
		}elseif($num >= 6 && $num <= 10){
			echo 'Passed';
		}elseif($num >= 11 && $num <= 100){
			echo 'Too High, Not in the range';
		}elseif($num < 0){
			echo 'Too Low, Not in the range';
		}else{
			echo 'Failed';
		}
	*/



	/*
		$num = 5;
		if ($num >= 1){
			if($num <= 5){
				echo 'Score '. "$num" .' is Poor';
			}
		}

	*/


	# LOGICAL OPERATORS
	
	/*	 AND &&
		 OR ||
		 XOR	
	*/


	/*
	$num = 5;
	if($num >= 5 OR $num <= 10){
		echo "$num Passed";
	}
	*/


	/*
	$num = 5;
	if($num >= 5 AND $num <= 10){
		echo "$num Pasado";
	}
	*/


	/*
	$num = 6;
	if($num > 6 XOR $num = 10){
		echo "$num Passed";
	}
	*/


	$favColor = 'green';

	switch($favColor){
		case 'red':
			echo 'Your Favorite Color is Red';
			break;
		case 'blue':
			echo 'Your Favorite Color is Blue';
			break;
		case 'green':
			echo 'Your Favorite Color is Green';
			break;
		case 'yellow':
			echo 'Your Favorite Color is Yellow';
			break;
		default:
		echo 'Your Favorite Color is Something Else';

	}











?>