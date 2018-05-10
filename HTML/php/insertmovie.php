<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Form Feedback</title>
</head>
<body>
<?php 
//require('mysqli_connect.php');

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
$genre = implode(',', $_POST['genre']);
$mpaa = $_POST['mpaa'];
$studio = $_POST['studio'];

$mysql = "INSERT INTO Movie (title, release_year, length, budget, lang, description, rating, revenue, genre, mpaa, studio)
VALUES ('$title', '$release_year', '$length', '$budget', '$lang', '$description', '$rating', '$revenue', '" . $genre . "', '$mpaa', '$studio')";


if (mysqli_query($link, $mysql)){
    echo "Records added successfully.";
}else{
    echo "Error: Could not.." . mysql_error($link);
}
mysql_close($link);


?>
</body>
</html>

