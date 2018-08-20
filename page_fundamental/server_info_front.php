<?php include('server_info.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>System Info</title>

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Server and File Info</h1>
		<?php if($server): ?>
			<ul class="list-group">
				<?php foreach($server as $key => $value): ?>
					<li class="list-group-item">

						<strong><?php echo $key . " : ". $value; ?> </strong>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>

		<br>

		<h1>Client Info</h1>
		<?php if($client): ?>
			<ul class="list-group">
				<?php foreach($client as $key => $value): ?>
					<li class="list-group-item">

						<strong><?php echo $key . " : ". $value; ?> </strong>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
	</div>
</body>
</html>

