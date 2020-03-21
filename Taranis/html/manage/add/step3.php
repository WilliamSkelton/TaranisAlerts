<?php

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
    //mysql credentials
    $mysql_host = "192.168.1.201";
    $mysql_username = "morrigan";
    $mysql_password = "sbL6p5WHvJn3Pj7Y";
    $mysql_database = "morrigan";

    $eid = $_SESSION['eid'];
    $lasteid = $eid - 1;

print $eid;

?>
content