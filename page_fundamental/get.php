<!-- 
htmlentities - gagawinn nyang html yung mga malicious input gaya ng script> 
-->

<?php
	if(isset($_GET['name'])){
		$name = htmlentities($_GET['name']);
		echo $name;
	}

	if(isset($_GET['email'])){
		$email = htmlentities($_GET['email']);
		echo $email;
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Get Method</title>
</head>
<body>

<form method="GET" action="get.php">
	<div>
		<label>Name</label><br />
		<input type="text" name="name">
	</div>
	<div>
		<label>Email</label><br />
		<input type="email" name="email">
	</div>
	<input type="submit" name="submit">	
</form>


<!-- Pwede din mag send ng data kahit hindi nakapaloob sa form -->
<br />
<br />


<ul>
	<li><a href="get.php?name=Rex">Rex</a></li>
	<li><a href="get.php?name=Joyce">Joyce</a></li>
</ul>

<h1><?php echo $name ."'s Profile"; ?></h1>


</body>
</html>