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
		<li><a href="../nav_search.html">Search</a></li>
		<li><a href="../insert_validate.html">Insert</a></li>
		<li><a href="../update_validate.html">Update</a></li>
		<li><a href="../delete_validate.html">Delete</a></li>
		<li id="here"><a href="../nav_report.html">Report</a></li>
	</ul>
	</div>
	<hr>
	<fieldset align="center">
	<div id="left">
	<ul>

<?php 
require "../php/mysqli_connect.php";

$query1 = "SELECT title, release_year from Movie where revenue > avg(revenue)";
$query1 = "SELECT * from Movie";

$result = $link->query($query1);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "title: " . $row['title'];
    }
} else {
    echo "0 results";
}
?>

	</ul>
	</fieldset>


</body>
</html>
