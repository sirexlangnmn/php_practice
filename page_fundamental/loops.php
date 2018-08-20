<?php
	# Loops - Execute code set number of times

	/* 
		For
		While
		Do.. While
		Foreach
	*/



		# For Loop
		# @params -init, condition, increment 

	/*	
		for($i = 5; $i <= 10; $i++){
			echo 'Number '.$i;
			echo '<br>';
		}
	*/




	/*
		$people = array('Rex', 'Yamson', 'Brian', 'Dan');
		foreach ($people as $key => $person) {
			echo $person;
			echo '<br>';
		}
	*/


		$people2 = array('Rex' => 'rex@gmail.com', 'Yamson' => 'yams@gmail.com', 'Brian' => 'bri@gmail.com', 'Dan' => 'dan@gmail.com');
		foreach ($people2 as $person2 => $email) {
			echo $person2 .' : '. $email;
			echo '<br>';
		}




		# While Loop
		# @params - condition
	
	/*
		$i = 0;

		while($i <= 10){
			echo $i;
			echo '<br>';
			$i++;
		}
	*/




		# Do while
		# @params - condition

	/*
		$i = 0;
		do{
			echo $i;
			echo '<br>';
			$i++;
		}
 		while($i <= 7);
	*/



?>