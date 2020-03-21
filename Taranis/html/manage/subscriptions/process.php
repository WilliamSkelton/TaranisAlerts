<?php

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

    //mysql credentials
    $mysql_host = "";
    $mysql_username = "";
    $mysql_password = "";
    $mysql_database = "";
	$value = filter_var($_POST['value'], FILTER_SANITIZE_STRING);
    $eid = filter_var($_POST['eid'], FILTER_SANITIZE_STRING);
	$_SESSION['value'] = $value;
    $_SESSION['eid'] = $eid;
	$username = $_SESSION['username'];

$conn = mysqli_connect($mysql_host, $mysql_username, $mysql_password, $mysql_database);

$query = "SELECT id FROM users WHERE username='$username';";

if ($result = $conn->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        $_SESSION['uid'] = $row['id'];
        print($row['uid']);
    }

    /* free result set */
    $result->free();
}
header('location: step2.php');
?>
