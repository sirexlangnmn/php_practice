<?php

	if(filter_has_var(INPUT_POST, 'name')){
		$name = htmlentities($_POST['name']);
		$uc_name =	ucwords($name);
		echo 'Name: '. $uc_name;
	}else{
		echo 'Name NOT Found';
	} 

	echo '<br />';

	if(filter_has_var(INPUT_POST, 'email')){
		$email = htmlentities($_POST['email']);
		$trimmed_email = trim($email);
		$sanitize_email = filter_var($trimmed_email, FILTER_SANITIZE_EMAIL);
		$validate_email = filter_var($sanitize_email, FILTER_VALIDATE_EMAIL);
		echo 'Email: ' . $validate_email;
	}else{
		echo 'Email NOT Valid';
	} 

	echo '<br />';

	if(filter_has_var(INPUT_POST, 'mobile')){
		$mobile = htmlentities($_POST['mobile']);
		$trimmed_mobile = trim($mobile);
		$sanitize_mobile = filter_var($trimmed_mobile, FILTER_SANITIZE_NUMBER_INT);
		$validate_mobile = filter_var($sanitize_mobile, FILTER_SANITIZE_SPECIAL_CHARS);
		echo 'Mobile: ' . $validate_mobile;
	}else{
		echo 'Mobile NOT Valid';
	} 


	echo '<br />';
	echo '<br />';


	# FILTER_VALIDATE_BOOLEAN
	# FILTER_VALIDATE_EMAIL
	# FILTER_VALIDATE_FLOAT
	# FILTER_VALIDATE_INT
	# FILTER_VALIDATE_IP
	# FILTER_VALIDATE_REGEXP
	# FILTER_VALIDATE_URL


	# FILTER_SANITIZE_EMAIL
	# FILTER_SANITIZE_ENCODED
	# FILTER_SANITIZE_NUMBER_FLOAT
	# FILTER_SANITIZE_NUMBER_INT
	# FILTER_SANITIZE_SPECIAL_CHARS
	# FILTER_SANITIZE_STRING
	# FILTER_SANITIZE_URL





?>

<!DOCTYPE html>
<html>
<head>
	<title>POST Method</title>
</head>
<body>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<div>
		<label>Name</label><br />
		<input type="text" name="name">
	</div>
	<div>
		<label>Email</label><br />
		<input type="email" name="email">
	</div>
	<div>
		<label>Mobile Number</label><br />
		<input type="text" name="mobile">
	</div>
	<br />
	<input type="submit" name="submit">	
</form>

</body>
</html>