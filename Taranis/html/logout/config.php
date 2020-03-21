<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', '192.168.1.201');
define('DB_USERNAME', 'morrigan');
define('DB_PASSWORD', 'sbL6p5WHvJn3Pj7Y');
define('DB_NAME', 'morrigan');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>