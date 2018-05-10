<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Form Feedback</title>
</head>
<body>
<?php 
require('mysqli_connect.php');

$link = @mysqli_connect("localhost", "341group03", "1182E0", "db03");
mysqli_set_charset($link, 'utf8');


if ($link === false){
	die("ERROR: Could not connect" . mysqli_connect_error());
}


$title = $_POST['title'];
$release_year = $_POST['release_year'];
$length = $_POST['length'];
$budget = $_POST['budget'];
$lang = $_POST['language'];
$description = $_POST['description'];
$rating = $_POST['rating'];
$revenue = $_POST['revenue'];
$genre = $_POST['genre'];
$mpaa = $_POST['mpaa'];
$studio = $_POST['studio'];
$sequel_title = $_POST['sequel_title'];
$sequel_year = $_POST['sequel_year'];

$mysql = "UPDATE Movie 

SET release_year = $release_year, length = $length, budget = $budget, lang = $lang, description = $description, rating = $rating, revenue = $revenue, genre = $genre, mpaa = $mpaa, studio = $studio, sequel_title = $sequel_title, sequel_year = $sequel_year

WHERE title = $title, release_year = $release_year";


if ($link->query($mysql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $link->error;
}
mysql_close($link);


</body>
</html>

