<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Marvel Cinematic Universe</title>
	<link rel="stylesheet" href="../stylesheet-mcu.css">
</head>
<body align="center">

	<picture>
		<img src="../images/logo.png" alt="Marvel Cinematic Universe" class="center" style="width:500px;height:112px;">
	</picture>
	<hr>
	<div id="nav">
	<ul>
		<li><a href="../index.html">Marvel Cinematic Universe</a></li>
		<li id="here"><a href="../nav_search.html">Search</a></li>
		<li><a href="../nav_insert.html">Insert</a></li>
		<li><a href="../nav_update.html">Update</a></li>
		<li><a href="../nav_delete.html">Delete</a></li>
	</ul>
	</div>
	<hr>
	<fieldset align="center">
	<div id="left">
	<ul>

		

<?php 
$link = @mysqli_connect("localhost", "341group03", "1182E0", "db03");
mysqli_set_charset($link, 'utf8');
if ($link === false){
	die("ERROR: Could not connect" . mysqli_connect_error());
}
$thistable = $_COOKIE['table'];
$selected_value = $_POST[$thistable];

echo "<p>Selected table is {$thistable}</p>";

switch ($thistable) {
	case 'Movie':
		$query = "DELETE FROM Movie WHERE title = '$selected_value'";
		$result = $link->query($query);
		echo "Delete Successful";
	
		break;

	case 'Person':
		$query = "DELETE FROM Person WHERE id = '$selected_value'";
		$result = $link->query($query);
		echo "Delete Successful";;

		break;

	case 'Location':
		$query = "DELETE FROM Location WHERE loc_name = '$selected_value'";
		$result = $link->query($query);
		echo "Delete Successful";

		break;

	case 'Superhero':
		$query = "DELETE FROM Superhero WHERE alias = '$selected_value'";
		$result = $link->query($query);
		echo "Delete Successful";

		break;

	case 'Theme':
		$query = "DELETE FROM Theme WHERE track_name = '$selected_value'";
		$result = $link->query($query);
		echo "Delete Successful";

		break;
}

?>

	</ul>
	</fieldset>


</body>
</html>
