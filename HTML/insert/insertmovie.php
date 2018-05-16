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
	</ul>
	</div>
	<hr>
	<fieldset align="center">
	<div id="left">
	<ul>

<?php 
require "../php/mysqli_connect.php";

$title = $_POST['title'];
$release_year = $_POST['release_year'];
$length = $_POST['length'];
$budget = $_POST['budget'];
$lang = $_POST['language'];
$description = $_POST['description'];
$rating = $_POST['rating'];
$revenue = $_POST['revenue'];
$genre = implode(',', $_POST['genre']);
$mpaa = $_POST['mpaa'];
$studio = $_POST['studio'];

$mysql = "INSERT INTO Movie (title, release_year, length, budget, lang, description, rating, revenue, genre, mpaa, studio)
VALUES ('$title', '$release_year', '$length', '$budget', '$lang', '$description', '$rating', '$revenue', '" . $genre . "', '$mpaa', '$studio')";

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

