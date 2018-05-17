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

$num_query = "SELECT count(title) as count from Movie WHERE revenue > (SELECT avg(revenue) FROM Movie)";
$result0 = $link->query($num_query);
$row = $result0->fetch_assoc();
echo "<p>Number of Movies with revenue higher than the average: " . $row['count'] . "</p> <br> <br>";

$avg_query = "SELECT avg(revenue) as avg FROM Movie";
$result = $link->query($avg_query);
$row = $result->fetch_assoc();
$avg_revenue = $row['avg'];
echo "The average revenue is " . round($avg_revenue, 0) . "<br> <br>";

$movie_query = "SELECT title, revenue FROM Movie WHERE revenue > (SELECT avg(revenue) FROM Movie)";
$result = $link->query($movie_query);
echo "<p>These are the movies with revenue higher than the average revenue: </p> <br> <br>";

if ($result) {
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo $row['title'] . " | $" . $row['revenue'] . "<br>";

            $movie_title = $row['title'];
    
            $actor_query = "select l_name, f_name, movie_title from Position p1, Person p2
            where p1.movie_title = \"$movie_title\" and p1.id like 'A0%' and p1.id = p2.id";

            #echo $actor_query . "<br>";
            
            $result2 = $link->query($actor_query);
            if ($result2){
                if ($result2->num_rows > 0) {
                    while($row2 = $result2->fetch_assoc()) {
                        echo "Cast: " . $row2['f_name'] . " " . $row2['l_name'] . "<br>";
                    }
                }
                else {
                    echo "No actors enrolled in this movie!?";
                    echo "<br> <br>";
                }
            }
            else {
                echo "No actors enrolled in this movie!?";
                echo "<br> <br>";
            }

            $crew_query = "SELECT COUNT(id) as Count, movie_title 
            FROM Position
            WHERE id NOT LIKE 'A0%' AND movie_title = '{$row['title']}'
            GROUP BY movie_title";
            
            $result3 = $link->query($crew_query);
            if ($result3){
                if ($result3->num_rows > 0) {
                    while($row3 = $result3->fetch_assoc()) {
                        echo "Number of Crews: " . $row3['Count'] . "<br>";
                    }
                    echo "<br>";
                }
                else {
                    echo "No crew enrolled in this movie!?";
                    echo "<br> <br>";
                }
            }
            else {
                echo "No crew enrolled in this movie!?";
                echo "<br> <br>";
            }
        }
    } 
    else {
        echo "0 results";
    }
}
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Title: " . $row['title'] . " | Revenue: " . $row['revenue'] . "<br>";

        $actor_query = "select l_name, f_name, movie_title from Position p1, Person p2
        where p1.movie_title = '{$row['title']}' and p1.id like 'A0%' and p1.id = p2.id";
        
        $result2 = $link->query($actor_query);
        if ($result2){
            if ($result2->num_rows > 0) {
                while($row2 = $result2->fetch_assoc()) {
                    echo "Actor: " . $row2['f_name'] . "<br>";
                }
            }
        }
        else {
            echo "No actors enrolled in this movie!?";
            echo "<br>";
        }
        
        echo "<br>";
    }

} else {
    echo "0 results";
}
?>

	</ul>
	</fieldset>


</body>
</html>
