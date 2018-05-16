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
		<li><a href="../nav_insert.html">Insert</a></li>
		<li id="here"><a href="../nav_update.html">Update</a></li>
		<li><a href="../nav_delete.html">Delete</a></li>
		<li><a href="nav_report.html">Report</a></li>
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


function updateTitle($link, $title) {
	$table_value = $_COOKIE['table_value'];
	$mysql = "	UPDATE Movie
				SET	title = '{$title}'
				WHERE title = '{$table_value}'
			 ";

	if (mysqli_query($link, $mysql)){
		echo "Records updated successfully.";
	}else{
		echo "Error: Could not.." . mysqli_error($link);
	}
}

function updateYear($link, $year) {
	$table_value = $_COOKIE['table_value'];
	$mysql = "	UPDATE Movie
				SET	release_year = '{$year}'
				WHERE title = '{$table_value}'
			 ";

	echo $mysql;

	if (mysqli_query($link, $mysql)) {
		echo "Records updated successfully.";
	}else{
		echo "Error: Could not.." . mysqli_error($link);
	}
}

function updateStudio($link, $studio) {
	$table_value = $_COOKIE['table_value'];
	$mysql = "	UPDATE Movie
				SET	studio = '{$studio}'
				WHERE title = '{$table_value}'
			 ";

	if (mysqli_query($link, $mysql)){
		echo "Records updated successfully.\n";
	}else{
		echo "Error: Could not.." . mysqli_error($link);
	}
}

function updateLength($link, $length) {
	$table_value = $_COOKIE['table_value'];
	$mysql = "	UPDATE Movie
				SET	length = {$length}
				WHERE title = '{$table_value}'
			 ";

	if (mysqli_query($link, $mysql)){
		echo "Records updated successfully.\n";
	}else{
		echo "Error: Could not.." . mysqli_error($link);
	}
}

function updateBudget($link, $budget) {
	$table_value = $_COOKIE['table_value'];
	$mysql = "	UPDATE Movie
				SET	budget = {$budget}
				WHERE title = '{$table_value}'
			 ";

	if (mysqli_query($link, $mysql)){
		echo "Records updated successfully.\n";
	}else{
		echo "Error: Could not.." . mysqli_error($link);
	}
}

function updateLanguage($link, $lang) {
	$table_value = $_COOKIE['table_value'];
	$mysql = "	UPDATE Movie
				SET	lang = '{$lang}'
				WHERE title = '{$table_value}'
			 ";

	if (mysqli_query($link, $mysql)){
		echo "Records updated successfully.\n";
	}else{
		echo "Error: Could not.." . mysqli_error($link);
	}
}

function updateDescription($link, $description) {
	$table_value = $_COOKIE['table_value'];
	$mysql = "	UPDATE Movie
				SET	description = '{$description}'
				WHERE title = '{$table_value}'
			 ";

	if (mysqli_query($link, $mysql)){
		echo "Records updated successfully.\n";
	}else{
		echo "Error: Could not.." . mysqli_error($link);
	}
}

function updateRating($link, $rating) {
	$table_value = $_COOKIE['table_value'];
	$mysql = "	UPDATE Movie
				SET	rating = {$rating}
				WHERE title = '{$table_value}'
			 ";

	if (mysqli_query($link, $mysql)){
		echo "Records updated successfully.\n";
	}else{
		echo "Error: Could not.." . mysqli_error($link);
	}
}

function updateRevenue($link, $revenue) {
	$table_value = $_COOKIE['table_value'];
	$mysql = "	UPDATE Movie
				SET	revenue = {$revenue}
				WHERE title = '{$table_value}'
			 ";

	if (mysqli_query($link, $mysql)){
		echo "Records updated successfully.\n";
	}else{
		echo "Error: Could not.." . mysqli_error($link);
	}
}

function updatempaa($link, $mpaa) {
	$table_value = $_COOKIE['table_value'];
	$mysql = "	UPDATE Movie
				SET	mpaa = '{$mpaa}'
				WHERE title = '{$table_value}'
			 ";

	if (mysqli_query($link, $mysql)){
		echo "Records updated successfully.\n";
	}else{
		echo "Error: Could not.." . mysqli_error($link);
	}
}

function updateGenre($link, $genre) {
	$table_value = $_COOKIE['table_value'];
	$mysql = "	UPDATE Movie
				SET	genre = '{$genre}'
				WHERE title = '{$table_value}'
			 ";

	if (mysqli_query($link, $mysql)){
		echo "Records updated successfully.\n";
	}else{
		echo "Error: Could not.." . mysqli_error($link);
	}
}

/*
echo "
	<br>
	<button onclick='goBack()'>Go Back</button>

	<script>
	function goBack() {
		window.history.back();
	}
	</script>
";
*/

updateYear($link, $release_year);
updateStudio($link, $studio);
updateLength($link, $length);
updateBudget($link, $budget);
updateDescription($link, $description);
updateLanguage($link, $lang);
updateRating($link, $rating);
updatempaa($link, $mpaa);
updateRevenue($link, $revenue);
updateGenre($link, $genre);
updateTitle($link, $title);

/*
if (mysqli_query($link, $mysql)){
    echo "Records added successfully.";
}else{
    echo "Error: Could not.." . mysqli_error($link);
}
mysqli_close($link);
*/

?>
	</select></label></p>
		<hr>
	</ul>
	</fieldset>
	<p><input type="submit" name="Insert" value="Next"></p>

</body>
</html>

