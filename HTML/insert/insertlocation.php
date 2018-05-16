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
		<li><a href="../nav_search.html">Search</a></li>
		<li id="here"><a href="../nav_insert.html">Insert</a></li>
		<li><a href="../nav_update.html">Update</a></li>
		<li><a href="../nav_delete.html">Delete</a></li>
	</ul>
	</div>
	<hr>
	<fieldset align="center">
	<div id="left">
	<ul>

<?php 
require "../php/mysqli_connect.php";
/*
$link = mysqli_connect("localhost", "capmarvel", "thanoswilldie", "mcu");
mysqli_set_charset($link, 'utf8');

if ($link === false){
	die("ERROR: Could not connect" . mysqli_connect_error());
}
*/

$name = $_POST['loc_name'];
$zip = $_POST['zip'];
$state = $_POST['state'];
$country = $_POST['country'];
$city = $_POST['city'];

$mysql = "INSERT INTO Location (loc_name, zip, state, country, city)
VALUES ('$name', '$zip', '$state', '$country', '$city')";

if (mysqli_query($link, $mysql)){
    echo "Records added successfully.";
}else{
    echo "Error: Could not.." . mysql_error($link);
}
mysql_close($link);

?>
	</select></label></p>
		<hr>
	</ul>
	</fieldset>
	<p><input type="submit" name="Insert" value="Next"></p>

</body>
</html>

