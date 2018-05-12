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
require "../php/mysqli_connect.php";
/*
$link = mysqli_connect("localhost", "capmarvel", "thanoswilldie", "mcu");
mysqli_set_charset($link, 'utf8');

if ($link === false){
	die("ERROR: Could not connect" . mysqli_connect_error());
}
*/

$id = $_POST['id'];
$l_name = $_POST['l_name'];
$m_name = $_POST['m_name'];
$f_name = $_POST['f_name'];
$dob = $_POST['dob'];
$nationality = $_POST['nationality'];
$gender = $_POST['gender'];

$mysql = "INSERT INTO Person (id, l_name, m_name, f_name, dob, nationality, gender)
VALUES ('$id', '$l_name', '$m_name', '$f_name', '$dob', '$nationality', '$gender')";

if (mysqli_query($link, $mysql)){
    echo "Records added successfully.";
}else{
    echo "Error: Could not.." . mysqli_error($link);
}
mysqli_close($link);

?>
	</select></label></p>
		<hr>
	</ul>
	</fieldset>
	<p><input type="submit" name="Insert" value="Next"></p>

</body>
</html>

