<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Marvel Cinematic Universe</title>
	<link rel="stylesheet" href="../stylesheet-mcu.css">
</head>
<body align="center">

	<picture>
		<img src="../images/logo.png" alt="Marvel Cinematic Universe" style="width:500px;height:112px;">
	</picture>
	<hr>
	<div id="nav">
	<ul>
		<li><a href="../index.html">Marvel Cinematic Universe</a></li>
		<li id="here"><a href="../nav_search2.html">Search</a></li>
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

//echo "<p>Value is {$selected_value} </p>";
echo "<p>Selected table is {$thistable}</p>";

switch ($thistable) {
	case 'Movie':
		$query = "SELECT title FROM Movie WHERE title = '{$selected_value}'";
		echo $query;
		$result = $link->query($query);
		$row = $result->fetch_assoc();
		echo "<p> {$selected_value} </p>";
		
		echo "<p> ${$row['title']}</p>";
		echo  "<p>Title: {$row['title']} Release Year: {$row['release_year']} Length {$row['length']} Budget: {$row['budget']} Language: {$row['lang']} Description:  {$row['description']} Rating: {$row['rating']} Revenue: {$row['revenue']} Genre: {$row['genre']} MPAA: {$row['mpaa']}  Studio: {$row['studio']} </p>";
		break;

	case 'Person':
		break;

	case 'Location':
		break;

	case 'Superhero':
		break;

	case 'Theme':
		break;
}




?>

	</ul>
	</fieldset>


</body>
</html>

