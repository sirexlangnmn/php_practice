 <?php
// People Array @TODO - Get from DB
 $people[] = "Federex";
 $people[] = "Kien";
 $people[] = "Alvin";
 $people[] = "Dan";
 $people[] = "Vincent";
 $people[] = "Brian";
 $people[] = "David";
 $people[] = "Agudo";
 $people[] = "Liam";
 $people[] = "Noah";
 $people[] = "William";
 $people[] = "James";
 $people[] = "Logan";
 $people[] = "Benjamin";
 $people[] = "Mason";
 $people[] = "Elijah";
 $people[] = "Oliver";
 $people[] = "Jacob";
 $people[] = "Lucas";
 $people[] = "Aiden";
 $people[] = "Henry";
 $people[] = "Joseph";
 $people[] = "Jackson";
 $people[] = "Samuel";
 $people[] = "Sebastian";
 $people[] = "Carter";
 $people[] = "Jerimiah";
 $people[] = "Hudson";
 $people[] = "Nolan";
 $people[] = "Ezra";
 $people[] = "Joyce";
 $people[] = "Nikka";
 
// Get Query String

 $q = $_REQUEST['q'];

$suggestion = "";

// Get Suggestion
if ($q !== "") {
	$q = strtolower($q);
	$len = strlen($q);
	foreach ($people as $person) {
		if (stristr($q, substr($person, 0, $len))){
			if ($suggestion === "") {
				$suggestion = $person;
			} else {
				$suggestion .= ", $person";
			}
		}
	}
}

echo $suggestion === "" ? "No suggestion" : $suggestion;

 ?>