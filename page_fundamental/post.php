<!-- 
htmlentities - gagawinn nyang html yung mga malicious input gaya ng script> 
-->

<?php
	if(isset($_POST['name'])){
	// print_r($_POST);
		$name = htmlentities($_POST['name']);
		echo $name;
	}

	if(isset($_POST['email'])){
		$email = htmlentities($_POST['email']);
		echo $email;
	}


	//	$_REQUEST = applicable kahit GET O POST
	/*
		if(isset($_REQUEST['email'])){
			$email = htmlentities($_REQUEST['email']);
			echo $email;
		}
	*/
?>


<!DOCTYPE html>
<html>
<head>
	<title>POST Method</title>
</head>
<body>

<form method="POST" action="post.php">
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

</body>
</html>