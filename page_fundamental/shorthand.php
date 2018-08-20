<?php
	//Shorthand and Alternative Syntax




	// Pareho lang silang tatlo, short version.
	$loggedIn = false;

	/*
		if($loggedIn){
			echo 'You are logged in';
		}else{
			echo 'Your are NOT logged in';
		}
	*/


	/*
		echo ($loggedIn) ? 'You are logged in 1' : 'You are NOT logged in 1';
	*/


	/*
		$isRegistered = ($loggedIn == true) ? true : false;
		echo $isRegistered;
	*/

// --------------------------------------------------------------------------

	// Nested Shorthand

	$age = 10;
	$score = 10;	

	echo 'Your score is: '.($score > 10 ? ($age > 10 ? 'Average' : 'Exceptional'):($age > 10 ? 'Horrible' : 'Average'));
	// 1st statement says: If score > 10 and age > 10 = Average, if not, Exceptional
	// 2nd statement says: If score < 10 and age > 10 = Horrible, if not, Average
?>



 	<div>
		<?php if($loggedIn){ ?>
			<h1>Hello User</h1>
		<?php } else{ ?>
			<h1>Hello Guest</h1>
		<?php } ?>
	</div>
 


	<div>
		<?php if($loggedIn): ?>
		<h1>Hello User1</h1>
		<?php else: ?>
		<h1>Hello Guest1</h1>
		<?php endif; ?>
	</div>




	<?php
		$arr  = [1,2,3,4,5];
	?>
	<div>
		<?php foreach($arr as $val): ?>
			<?php echo $val; ?>   <!-- Vertical -->
			<!-- ?php echo $val . '<br />'; ? -->  <!-- Horizontal -->
		<?php endforeach; ?>
	</div>



	<div>
		<?php for($i=0 ; $i<10 ; $i++): ?>
			<li><?php echo $i; ?></li>
		<?php endfor; ?>
	</div>
