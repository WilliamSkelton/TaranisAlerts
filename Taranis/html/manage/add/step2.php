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

	$eventname = $_SESSION['eventname'];
$mysqli = mysqli_connect($mysql_host, $mysql_username, $mysql_password, $mysql_database);

  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "SELECT eid FROM events WHERE eventname='$eventname';";

if ($result = $mysqli->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        $_SESSION['eid'] = $row['eid'];
    }

    /* free result set */
    $result->free();
}

/* close connection */
$mysqli->close();
print "sucess";
header('location: /manage/add')
?>
