<?php
Echo "<p>Hello World 2!  These are my pets:</p>";
require('mysqli_connect.php');
$r = mysqli_query($dbc, 'SELECT * FROM Movies');

if ($r) {
  while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
    echo '<p>'.$row['title'].' - '.$row['description'].'</p>';
    }
}
mysqli_close($dbc);
?>

