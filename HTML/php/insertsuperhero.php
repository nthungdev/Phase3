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

$alias = $_POST['alias'];
$sup_name = $_POST['sup_name'];
$id = $_POST['id'];
$gender = $_POST['gender'];
$species = $_POST['species'];
$ability = $_POST['ability'];

$mysql = "INSERT INTO Superhero VALUES ('$alias', '$sup_name', '$id', '$gender', '$species', '$ability')";

if (mysqli_query($link, $mysql)){
    echo "Records added successfully.";
}else{
    echo "Error: Could not.." . mysql_error($link);
}
mysql_close($link);

/*
// Print the submitted information:
if ( !empty($title) && !empty($release_year) && !empty($lang) 
    && !empty($description) && !empty($mpaa) ){
    echo "<p>Submission completed</p>
        <p>The title is $title </p>
        <p>The release year is {$release_year} </p>
        <p>The language is {$lang} </p>
        <p>The description is {$description} </p>
        <p>The genre are {$genre[0]} and {$genre[1]} </p>
        <p>The mpaa rating is {$mpaa} </p>";
    
} else { // Missing form value.
	echo '<p>Please go back and fill out the form again.</p>';
}*/
?>
</body>
</html>
