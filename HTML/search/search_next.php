<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Marvel Cinematic Universe</title>
	<link rel="stylesheet" href="stylesheet-mcu.css">
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
$thistable = $_COOKIE['tablename'];
echo "<p>Selected {$thistable} is </p>";
$tablevaue = $_POST['$thistable']
echo $thistable . "lalalala";

switch ($thistable) {
	case 'Movie':
		echo "<hr>
		<p><label>Select Movie:
		<select name={$table}>";
		$query = "SELECT * FROM Movie WHERE title = ";
		$result = $link->query($query);
		    	
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

