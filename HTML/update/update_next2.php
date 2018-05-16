<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Marvel Cinematic Universe</title>
	<link rel="stylesheet" href="../stylesheet-mcu.css">
</head>

<body align="center">
	<!--<form action="insertmovie.php" method="post">-->
	<picture>
		<img src="../images/logo.png" alt="Marvel Cinematic Universe" class="center" style="width:500px;height:112px;">
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

$thistable = $_COOKIE['table'];
$selected_value = $_POST[$thistable];
setcookie('table_value', $selected_value, time() + (86400 * 30), "/");

//echo "<p>Value is {$selected_value} </p>";
//echo "<p>Selected table is {$thistable}</p>";

switch ($thistable) {
	case 'Movie':
		echo "
			<form action='update_movie.php' method='post'>
			<fieldset align='center'>
				<legend  align='center'>Enter the Movie</legend>
				<p  align='center'><label>Title: <input type='text' name='title' size='20' placeholder='Ex: Iron Man 2' maxlength='255'></label></p>
				<p  align='center'><label>Released Year:
				<select  align='center' name='release_year'>
					<option value='2000'>2000</option> <option value='2001'>2001</option> <option value='2002'>2002</option>
					<option value='2003'>2003</option> <option value='2004'>2004</option> <option value='2005'>2005</option>
					<option value='2006'>2006</option> <option value='2007'>2007</option> <option value='2008'>2008</option>
					<option value='2009'>2009</option> <option value='2010'>2010</option> <option value='2011'>2011</option>
					<option value='2012'>2012</option> <option value='2013'>2013</option> <option value='2014'>2014</option>
					<option value='2015'>2015</option> <option value='2016'>2016</option> <option value='2017'>2017</option>
					<option value='2018'>2018</option> <option value='2019'>2019</option> <option value='2020'>2020</option>
				</select></label></p>
				<p  align='center'><label>Studio: <input type='text' name='studio' size='20' placeholder='Ex: Marvel Studio' maxlength='255'></label></p>
				<p  align='center'><label>Length of the Movie: <input type='number' name='length' placeholder='In Minutes' size='20'></label></p>
				<p  align='center'><label>Budget: <input type='number' name='budget' placeholder='Ex: 10000000' size='20'></label></p>
				<p  align='center'><label>Revenue: <input type='number' name='revenue' placeholder='Ex: 1000000000' size='20'></label></p>
				<p  align='center'><label>Rating: <input type='number' name='rating' placeholder='1.00' step='0.01' min='0.00' max='1.00'></label></p>
				<p  align='center'><label>Language: <input type='text' name='language' size='20' placeholder='Ex: English' maxlength='255'></label></p>
				<p  align='center'><label for='genre'>Genre: 
					</label>
					<input type='checkbox' id='Adventure' name='genre[]' value='Adventure'> Adventure
					<input type='checkbox' id='Action' name='genre[]' value='Action'> Action
					<input type='checkbox' id='Comedy' name='genre[]' value='Comedy'> Comedy
					<input type='checkbox' id='Fantasy' name='genre[]' value='Fantasy'> Fantasy
					<input type='checkbox' id='Horror' name='genre[]' value='Horror'> Horror
					<input type='checkbox' id='Romance' name='genre[]' value='Romance'> Romance
					<input type='checkbox' id='Sci-Fi' name='genre[]' value='Sci-Fi'> Sci-Fi
					<input type='checkbox' id='Thriller' name='genre[]' value='Thriller'> Thriller</p>
				<p  align='center'><label for='mpaa'>MPAA: 
					</label>
					<input type='radio' name='mpaa' value='PG'> PG
					<input type='radio' name='mpaa' value='PG-13'> PG-13 
					<input type='radio' name='mpaa' value='G'> G
					<input type='radio' name='mpaa' value='R'> R
					<input type='radio' name='mpaa' value='NC-17'> NC-17</p>
				<p  align='center'><label>Description: <textarea name='description' rows='=5' cols='40'></textarea></label></p>
			</fieldset>
			<p  align='center'><input type='submit' name='submit' value='Insert a Movie'></p>
			</form>
		";
		break;

	case 'Person':
		echo "
			<fieldset align='center'>
				<legend  align='center'>Enter the Person Information</legend>
				<p  align='center'><label>Person ID: <input type='text' name='id' size='10' placeholder='Ex: DI000001' maxlength='8'></label></p>
				<p  align='center'><label>Last Name: <input type='text' name='l_name' size='20' placeholder='Enter the Last Name' maxlength='255'></label></p>
				<p  align='center'><label>First Name: <input type='text' name='f_name' size='20' placeholder='Enter the First Name' maxlength='255'></label></p>
				<p  align='center'><label>Middle Name: <input type='text' name='m_name' size='20' placeholder='Enter the Middle Name' maxlength='255'></label></p>
				<p  align='center'><label>Date of Birth: <input type='date' name='dob' id='dob' ></label></p>
				<p  align='center'><label>Nationality: <input type='text' name='nationality' placeholder='Ex: American' size='20' maxlength='255'></label></p>		
				<p  align='center'><label for='gender'>Gender: </label>
					<input type='radio' name='gender' value='M'> Male 
					<input type='radio' name='gender' value='F'> Female</p>
			</fieldset>
			<p  align='center'><input type='submit' name='submit' value='Insert a Person'></p>
		";

		break;

	case 'Location':
		echo "
			<fieldset align='center'>
				<legend  align='center'>Enter a Location</legend>
				<p  align='center'><label>Location Name: <input type='text' name='loc_name' placeholder='Ex: 73 Rugar Street' size='20' maxlength='255'></label></p>
				<p  align='center'><label>Zip Code: <input type='text' name='zip' size='15' placeholder='Ex: 12901' maxlength='10'></label></p>
				<p  align='center'><label>state: <input type='text' name='state' size='20' placeholder='Ex: New York' maxlength='255'></label></p>
				<p  align='center'><label>country: <input type='text' name='country' size='20' placeholder='Ex: U.S' maxlength='255'></label></p>
				<p  align='center'><label>city: <input type='text' name='city' size='20' placeholder='Plattsburgh' maxlength='255'></label></p>
			</fieldset>
			<p  align='center'><input type='submit' name='submit' value='Insert a Location'></p>
		";
		break;

	case 'Superhero':
		echo "
		<fieldset align='center'>
			<legend  align='center'>Enter the Superhero Information</legend>
			<p  align='center'><label>Alias: <input type='text' name='alias' size='20' placeholder='Ex: Iron Man' maxlength='255'></label></p>
			<p  align='center'><label>Super Hero Name: <input type='text' name='sup_name' size='20' placeholder='Ex: Tony Stark' maxlength='255'></label></p>
			<p  align='center'><label>Actor ID: <input type='text' name='id' size='10' placeholder='Ex: AC000001' maxlength='8'></label></p>
			<p  align='center'><label for='gender'>Gender: </label>
				<input type='radio' name='gender' value='Male'> Male 
				<input type='radio' name='gender' value='Female'> Female</p>
			<p  align='center'><label>Species: <input type='text' name='species' size='20' placeholder='Ex: Human' maxlength='255'></label></p>
			<p  align='center'><label>Ability: <textarea name='ability' rows='=5' cols='40'></textarea></label></p>
		</fieldset>
		<p  align='center'><input type='submit' name='submit' value='Insert a Superhero'></p>
		";

		break;

	case 'Theme':
		echo "
			<fieldset align='center'>
				<legend align='center'>Enter the Soundtrack</legend>
				<p align='center'><label>Track Name: <input type='text' name='track_name' size='20' placeholder='Ex: Iron Man (2008 Version)' maxlength='255'></label></p>
				<p  align='center'><label>Released Year:
				<select  align='center' name='release_year'>
					<option value='2000'>2000</option> <option value='2001'>2001</option> <option value='2002'>2002</option>
					<option value='2003'>2003</option> <option value='2004'>2004</option> <option value='2005'>2005</option>
					<option value='2006'>2006</option> <option value='2007'>2007</option> <option value='2008'>2008</option>
					<option value='2009'>2009</option> <option value='2010'>2010</option> <option value='2011'>2011</option>
					<option value='2012'>2012</option> <option value='2013'>2013</option> <option value='2014'>2014</option>
					<option value='2015'>2015</option> <option value='2016'>2016</option> <option value='2017'>2017</option>
					<option value='2018'>2018</option> <option value='2019'>2019</option> <option value='2020'>2020</option>
				</select></label></p>
				<p align='center'><label>Number (No.): <input type='number' name='num' placeholder='Ex: 01' size='10'></label></p>
				<p align='center'><label>Composer: <input type='text' name='composer' size='20' placeholder='Ex: Rick Boston/John O&apos;Brien' maxlength='255'></label></p>
				<p align='center'><label>Length: <input type='number' name='length' placeholder='In Second' size='20'></label></p>
				<p align='center'><label>Album: <input type='text' name='album' size='20' placeholder='Ex: Iron Man' maxlength='255'></label></p>
			</fieldset>
			<p align='center'><input type='submit' name='submit' value='Insert a Soundtrack'></p>

		";
		break;
}

?>

	</ul>
	</fieldset>
</body>
</html>

