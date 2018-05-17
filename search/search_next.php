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
		<li><a href="../nav_report.html">Report</a></li>
	</ul>
	</div>
	<hr>
	<fieldset align="center">
	<div id="left">
	<ul>

		

<?php 
require "../php/mysqli_connect.php";

$thistable = $_COOKIE['table'];
$selected_value = $_POST[$thistable];


switch ($thistable) {
	case 'Movie':
		$query = "SELECT * FROM Movie WHERE title = '{$selected_value}'";
		$result = $link->query($query);
		$row = $result->fetch_assoc();

		echo "
			<table style = 'width:100%'>
				<tr>
					<td>Title</td>
					<td>{$row['title']}</td>
				</tr>
					<td>Release Year</td>
					<td>{$row['release_year']}</td>
				</tr>
					<td>Length</td>
					<td>{$row['length']}</td>
				</tr>
					<td>Budget</td>
					<td>{$row['budget']}</td>
				</tr>
					<td>Revenue</td>
					<td>{$row['revenue']}</td>
				</tr>
					<td>Language</td>
					<td>{$row['lang']}</td>
				</tr>
					<td>Rating</td>
					<td>{$row['rating']}</td>
				</tr>
					<td>Genre</td>
					<td>{$row['genre']}</td>
				</tr>
					<td>MPAA</td>
					<td>{$row['mpaa']}</td>
				</tr>
					<td>Studio</td>
					<td>{$row['studio']}</td>
				</tr>
					<td>Description</td>
					<td>{$row['description']}</td>
				</tr>
				";
		break;

	case 'Person':
		$query = "SELECT * FROM Person WHERE id = '{$selected_value}'";
		$result = $link->query($query);
		$row = $result->fetch_assoc();
		
		echo "
			<table style = 'width:100%'>
				<tr>
					<td>ID</td>
					<td>{$row['id']}</td>
				</tr>
					<td>Last Name</td>
					<td>{$row['l_name']}</td>
				</tr>
					<td>Middle Name</td>
					<td>{$row['m_name']}</td>
				</tr>
					<td>First Name</td>
					<td>{$row['f_name']}</td>
				</tr>
					<td>Date of Birth</td>
					<td>{$row['dob']}</td>
				</tr>
					<td>Nationality</td>
					<td>{$row['nationality']}</td>
				</tr>
					<td>Gender</td>
					<td>{$row['gender']}</td>
				</tr>
				";
		break;

	case 'Location':
		$query = "SELECT * FROM Location WHERE loc_name = '{$selected_value}'";
		$result = $link->query($query);
		$row = $result->fetch_assoc();
		
		echo "
		<table style = 'width:100%'>
			<tr>
				<td>Name</td>
				<td>{$row['loc_name']}</td>
			</tr>
				<td>State/Province</td>
				<td>{$row['state']}</td>
			</tr>
				<td>City</td>
				<td>{$row['city']}</td>
			</tr>
				<td>Country</td>
				<td>{$row['country']}</td>
			</tr>				
				<td>Zip</td>
				<td>{$row['zip']}</td>
			</tr>
		";

		break;

	case 'Superhero':
		$query = "SELECT * FROM Superhero WHERE alias = '{$selected_value}'";
		$result = $link->query($query);
		$row = $result->fetch_assoc();
		
		echo "
		<table style = 'width:100%'>
			<tr>
				<td>Alias</td>
				<td>{$row['alias']}</td>
			</tr>
				<td>Real Name</td>
				<td>{$row['sup_name']}</td>
			</tr>
				<td>Gender</td>
				<td>{$row['gender']}</td>
			</tr>
				<td>Species</td>
				<td>{$row['species']}</td>
			</tr>
				<td>Ability</td>
				<td>{$row['ability']}</td>
			</tr>
			";
		break;

	case 'Theme':
		$query = "SELECT * FROM Theme WHERE track_name = '{$selected_value}'";
		$result = $link->query($query);
		$row = $result->fetch_assoc();
		
		echo "	
		<table style = 'width:100%'>
			<tr>
				<td>Track Name</td> 
				<td>{$row['track_name']}</td>
			</tr>
				<td>No.</td> 
				<td>{$row['num']}</td>
			</tr>
				<td>Release Year</td> 
				<td>{$row['release_year']}</td>
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

