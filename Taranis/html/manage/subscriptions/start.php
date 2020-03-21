<?php

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
    //mysql credentials
    $servername = "";
    $username = "";
    $password = "";
    $dbname = "";
    $value = filter_var($_POST['value'], FILTER_SANITIZE_STRING);
    $freq = filter_var($_POST['freq'], FILTER_SANITIZE_STRING);
    $eid = filter_var($_POST['eid'], FILTER_SANITIZE_STRING);
    $time = time();
    $next = $time + $freq;  
    print($time);
    print('|');
    print($next);
    print('|');
    print($eid);


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE events SET last='$time', next='$next' WHERE eid=$eid;";

if ($conn->query($sql) === TRUE) {

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

unset($_SESSION['value']);



    