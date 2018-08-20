
<!DOCTYPE html>
<html>
<head>
	<title>Search Page</title>

	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
</head>

<script>
function showSuggestion(str){
	if (str.length == 0) {
		document.getElementById('output').innerHTML = '';
	} else {
		// AJAX REQUEST
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById('output').innerHTML = this.responseText;
			}
		}
		xmlhttp.open("GET", "suggest.php?q="+str, true);
		xmlhttp.send();
	}
}
	
</script>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	<a class="navbar-brand" href="#">Navbar</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarColor01">
	    <ul class="navbar-nav mr-auto">
	      	<li class="nav-item active">
	        	<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
	      	</li>
		    <li class="nav-item">
		        <a class="nav-link" href="#">Features</a>
		    </li>
		    <li class="nav-item">
		        <a class="nav-link" href="#">Pricing</a>
		    </li>
		    <li class="nav-item">
		        <a class="nav-link" href="#">About</a>
		    </li>
		</ul>
	</div>
</nav>


<div class="container">
	<h1>Search</h1>
	<form>
		<div class="form-group">
			<input type="text" name="name" class="form-control" onkeyup="showSuggestion(this.value)">
		</div>	
	</form>
	<p>Suggestion: <span id="output" style="font-weight: bold;"></span></p>
</div>

</body>
</html> 