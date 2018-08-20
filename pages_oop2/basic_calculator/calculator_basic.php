<?php
	include ('calc_func.php')
?>
<!DOCTYPE html>
<html>
<head>
	<title>Basic Calculator</title>
</head>
<body>

<form action="calc_post.php" method="POST">
	<input type="text" name="num1">
	<input type="text" name="num2">
	<select name="mdas">
		<option value="mul"> Multiply </option>
		<option value="div"> Divide </option>	
		<option value="add"> Add </option>
		<option value="sub"> Subtract </option>			
	</select>
	<button type="submit"> Calculate </button>
</form>

</body>
</html>