<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'test');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//all_pepper
$all_pepper = "a8G3eQLHpFeSeIhmDbhzhTRUEB1U6DZCs1M9SnZMl6WDVQfcY1E3z26oXX3tkHfUa8G3eQLHpFeSeIhmDbhzhTRUEB1U6DZCs1M9SnZMl6WDVQfcY1E3z26oXX3tkHfUa8G3eQLHpFeSeIhmDbhzhTRUEB1U6DZCs1M9SnZMl6WDVQfcY1E3z26oXX3tkHfU";

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
