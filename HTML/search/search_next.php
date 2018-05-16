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
		<li id="here"><a href="../nav_search.html">Search</a></li>
		<li><a href="../insert_validate.html">Insert</a></li>
		<li><a href="../update_validate.html">Update</a></li>
		<li><a href="../delete_validate.html">Delete</a></li>
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
$thistable = $_COOKIE['table'];
$selected_value = $_POST[$thistable];


switch ($thistable) {
	case 'Movie':
		$query = "SELECT * FROM Movie WHERE title = '{$selected_value}'";
		#echo $query;
		$result = $link->query($query);
		$row = $result->fetch_assoc();
		#echo "<p> {$selected_value} </p>";
		
		echo "	<p>Title: {$row['title']} </p>
			<p>Release Year: {$row['release_year']} </p>
			<p>Length {$row['length']} </p>
			<p>Budget: {$row['budget']} </p>
			<p>Language: {$row['lang']} </p>
			<p>Description:  {$row['description']} </p>
			<p>Rating: {$row['rating']} </p>
			<p>Revenue: {$row['revenue']} </p>
			<p>Genre: {$row['genre']} </p>
			<p>MPAA: {$row['mpaa']}  </p>
			<p>Studio: {$row['studio']} </p>";
		break;

	case 'Person':
		$query = "SELECT * FROM Person WHERE id = '{$selected_value}'";
		#echo $query;
		$result = $link->query($query);
		$row = $result->fetch_assoc();
		#echo "<p> {$selected_value} </p>";
		
		echo "	<p>ID: {$row['id']} </p>
			<p>Last Name: {$row['l_name']} </p>
			<p>Middle Name {$row['m_name']} </p>
			<p>First Name: {$row['f_name']} </p>
			<p>Date of Birth: {$row['dob']} </p>
			<p>Nationality:  {$row['nationality']} </p>
			<p>Gender: {$row['gender']} </p>";
		break;

	case 'Location':
		$query = "SELECT * FROM Location WHERE loc_name = '{$selected_value}'";
		#echo $query;
		$result = $link->query($query);
		$row = $result->fetch_assoc();
		#echo "<p> {$selected_value} </p>";
		
		echo "	<p>Name: {$row['loc_name']} </p>
			<p>Zip: {$row['zip']} </p>
			<p>State/Province: {$row['state']} </p>
			<p>Country: {$row['country']} </p>
			<p>City: {$row['city']} </p>";
		break;

	case 'Superhero':
		$query = "SELECT * FROM Superhero WHERE alias = '{$selected_value}'";
		#echo $query;
		$result = $link->query($query);
		$row = $result->fetch_assoc();
		#echo "<p> {$selected_value} </p>";
		
		echo "	<p>Alias: {$row['alias']} </p>
			<p>Real Name: {$row['sup_name']} </p>
			<p>Actor ID: {$row['actor_id']} </p>
			<p>Gender: {$row['gender']} </p>
			<p>Species: {$row['species']} </p>
			<p>Ability:  {$row['ability']} </p>";
		break;

	case 'Theme':
		$query = "SELECT * FROM Theme WHERE track_name = '{$selected_value}'";
		#echo $query;
		$result = $link->query($query);
		$row = $result->fetch_assoc();
		#echo "<p> {$selected_value} </p>";
		
		echo "	
		<table style = 'width:100%'>
			<tr>
				<td>Track Name</td> 
				<td>{$row['track_name']}</td>
			</tr>
				<td>Release Year</td> 
				<td>{$row['release_year']}</td>
			</tr>
				<td>No.</td> 
				<td>{$row['num']}</td>
			</tr>
				<td>Composer</td> 
				<td>{$row['composer']}</td>
			</tr>
				<td>Length</td> 
				<td>{$row['length']}</td>
			</tr>
				<td>Album</td> 
				<td>{$row['album']}</td>	
			</tr>
		</table>";
		break;
}

?>

	</ul>
	</fieldset>


</body>
</html>

