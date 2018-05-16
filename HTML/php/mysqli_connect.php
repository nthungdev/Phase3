<?php # Script 9.2 - mysqli_connect.php

// This file contains the database access information.
// This file also establishes a connection to MySQL,
// selects the database, and sets the encoding.

// Set the database access information as constants:
define('DB_USER', '341group03');
define('DB_PASSWORD', '1182E0');
define('DB_HOST', 'localhost');
define('DB_NAME', 'db03');


// Make the connection:
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die('Could not connect to MySQL: ' . mysqli_connect_error() );

// Set the encoding...
mysqli_set_charset($link, 'utf8');

// Check connection:
if ($link->connect_error) {
    die("connection failed: " . $link->connect_error);
}

//echo "Connect successfully!";

?>
