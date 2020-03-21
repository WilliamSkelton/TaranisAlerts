<?php

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
    //mysql credentials
    $servername = "192.168.1.201";
    $username = "morrigan";
    $password = "sbL6p5WHvJn3Pj7Y";
    $dbname = "morrigan";
    $uid = $_SESSION['uid'];
    $eid = $_SESSION['eid'];
    $value = $_SESSION['value'];
    


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($value == 0) {
    $sql = "INSERT INTO subscriptions (uid, eid, value)
            VALUES ('$uid', '$eid', '$value')";
} else{
    $sql = "DELETE FROM subscriptions WHERE uid='$uid' AND eid='$eid'";
}

if ($conn->query($sql) === TRUE) {

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

unset($_SESSION['value']);
header('location: /manage/subscriptions');

    