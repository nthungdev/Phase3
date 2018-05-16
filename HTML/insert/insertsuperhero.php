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
		<li><a href='../nav_search.html'>Search</a></li>
			<li id='here'><a href='../insert_validate.html'>Insert</a></li>
			<li><a href='../update_validate.html'>Update</a></li>
			<li><a href='../delete_validate.html'>Delete</a></li>
		<li><a href="nav_report.html">Report</a></li>
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
$alias = $_POST['alias'];
$sup_name = $_POST['sup_name'];
$actor_id = $_POST['id'];
$gender = $_POST['gender'];
$species = $_POST['species'];
$ability = $_POST['ability'];

$mysql = "INSERT INTO Superhero (alias, sup_name, actor_id, gender, species, ability)
VALUES ('$alias', '$sup_name', '$actor_id', '$gender', '$species', '$ability')";

if (mysqli_query($link, $mysql)){
    echo "Records added successfully.";
}else{
    echo "Error: Could not.." . mysqli_error($link);
	echo $mysql;
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

