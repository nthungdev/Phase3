<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Marvel Cinematic Universe</title>
	<link rel="stylesheet" href="../stylesheet-mcu.css">
</head>
<body align="center">
	<form action="delete_next.php" method="post">
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
		<li id="here"><a href="../delete_validate.html">Delete</a></li>
		<li><a href="../nav_report.html">Report</a></li>
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
$table = $_POST['table'];
setcookie('table', $table, time() + (86400 * 30), "/");

echo "<p>Selected table is $table </p>";

switch ($table) {
	case 'Movie':
		echo "<hr>
		<p><label>Select Movie:
		<select name={$table}>";
		$query = "SELECT title FROM Movie";
		$result = $link->query($query);
		if (mysqli_num_rows($result) > 0) {
		    	// output data of each row
		    	while($row = $result->fetch_array(MYSQLI_NUM)) {
				echo "<option value='{$row[0]}'>{$row[0]}</option>" . "<br>";
				
		    	}
		} else {
		    	echo "Error: Could not.. " . mysql_error($link);
		}
		break;

	case 'Person':
		echo "<hr>
		<p><label>Select Person:
		<select name={$table}>";
		$query = "SELECT * FROM Person";
		$result = $link->query($query);
		if (mysqli_num_rows($result) > 0) {
		    	// output data of each row
		    	while($row = $result->fetch_array(MYSQLI_NUM)) {
				echo "<option value='{$row[0]}'>{$row[1]}, {$row[3]} | ID:{$row[0]}</option>" . "<br>";
		    	}
		} else {
		    	echo "Error: Could not.. " . mysql_error($link);
		}
		break;

	case 'Location':
		echo "<hr>
		<p><label>Select Location:
		<select name={$table}>";
		$query = "SELECT * FROM Location";
		$result = $link->query($query);
		if (mysqli_num_rows($result) > 0) {
		    	// output data of each row
		    	while($row = $result->fetch_array(MYSQLI_NUM)) {
				echo "<option value='{$row[0]}'>{$row[0]}</option>" . "<br>";
		    	}
		} else {
		    	echo "Error: Could not.. " . mysql_error($link);
		}
		break;
	case 'Superhero':
		echo "<hr>
		<p><label>Select Superhero:
		<select name={$table}>";
		$query = "SELECT * FROM Superhero";
		$result = $link->query($query);
		if (mysqli_num_rows($result) > 0) {
		    	// output data of each row
		    	while($row = $result->fetch_array(MYSQLI_NUM)) {
				echo "<option value='{$row[0]}'>{$row[0]}</option>" . "<br>";
		    	}
		} else {
		    	echo "Error: Could not.. " . mysql_error($link);
		}
		break;
	case 'Theme':
		echo "<hr>
		<p><label>Select Song:
		<select name={$table}>";
		$query = "SELECT * FROM Theme";
		$result = $link->query($query);
		if (mysqli_num_rows($result) > 0) {
		    	// output data of each row
		    	while($row = $result->fetch_array(MYSQLI_NUM)) {
				echo "<option value='{$row[0]}'>{$row[0]}</option>" . "<br>";
		    	}
		} else {
		    	echo "Error: Could not.. " . mysql_error($link);
		}
		break;
}
?>
	</select></label></p>
		<hr>
	</ul>
	</fieldset>
	<p><input type="submit" name="submit" class="center" value="Delete (ONCE FOR ALL)"></p>
	</form>

</body>
</html>

