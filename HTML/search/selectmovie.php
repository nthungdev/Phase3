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

//$mysql = mysqli_query($dbc, 'INSERT INTO Movies VALUES(titl');
/*
    $title = mysqli_real_escape_string($dbc, $_REQUEST['title']);
    $studio = mysqli_real_escape_string($dbc, $_REQUEST['studio']);
    $length = mysqli_real_escape_string($dbc, $_REQUEST['length']);
    $budget = mysqli_real_escape_string($dbc, $_REQUEST['budget']);
    $revenue = mysqli_real_escape_string($dbc, $_REQUEST['revenue']);
    $rating = mysqli_real_escape_string($dbc, $_REQUEST['rating']);
*/

/*
function checkTitle($title){
    pass
}
*/

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

$mysql = "SELECT * FROM Movie WHERE title = $title";
$result = mysqli_query($link, $mysql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo  "Title: " . $row["title"]. " Release Year: " . $row["release_year"]. "Length" . $row["length"]. "Budget: " . $row["budget"]." Language: " . $row["lang"]."Description: " . $row["description"]."Rating: " . $row["rating"]."Revenue: " . $row["revenue"]."Genre: " . $row["genre"]."MPAA: " . $row["mpaa"]."Studio: " . $row["studio"]. "<br>";
    }
} else {
    echo "Error: Could not.." . mysql_error($link);
}

mysqli_close($link);

//mysqli_query($link, $mysql);
/*
if (mysqli_query($link, $mysql)){
    echo "Records added successfully.";
}else{
    echo "Error: Could not.." . mysql_error($link);
}
mysql_close($link);

/* Print the submitted information:
if ( !empty($title) && !empty($release_year) && !empty($lang) 
    && !empty($description) && !empty($mpaa) ){
    echo "<p>Submission completed</p>
        <p>The title is $title </p>
        <p>The release year is {$release_year} </p>
        <p>The language is {$lang} </p>
        <p>The description is {$description} </p>
        <p>The genre are {$genre[0]} and {$genre[1]} </p>
        <p>The mpaa rating is {$mpaa} </p>

	mysqli_query($dbc, $mysql)";
    
} else { // Missing form value.
	echo '<p>Please go back and fill out the form again.</p>';
}*/
?>
</body>
</html>

