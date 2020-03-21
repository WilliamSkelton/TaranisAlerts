<?php

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: /login");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is comming from a form

	//mysql credentials
	$mysql_host = "192.168.1.201";
	$mysql_username = "morrigan";
	$mysql_password = "sbL6p5WHvJn3Pj7Y";
	$mysql_database = "morrigan";
	
	$eventname = filter_var($_POST["eventname"], FILTER_SANITIZE_STRING); //set PHP variables like this so we can use them anywhere in code below
	
	$minute = filter_var($_POST["minute"], FILTER_SANITIZE_STRING);
	$desc = filter_var($_POST["desc"], FILTER_SANITIZE_STRING);
	
	$_SESSION['eventname'] = $eventname;

	if (empty($eventname)){
		die("Please enter an Event Name");
	}

		
	if (empty($minute)){
		die("Please enter Minutes!");
	}	
	$time=time();

	
	$freq_min = $minute * 60;
	$freq = $freq_min;
	$next = $time + $freq;
	
 /* create sql connection*/
$conn = mysqli_connect($mysql_host, $mysql_username, $mysql_password, $mysql_database);

$query = "INSERT INTO events (eventname, freq, last, next, descript) VALUES ('$eventname', '$freq', '$time', '$next', '$desc');";

  $stmt = $conn->prepare($query);
  $stmt->execute();
print "Done";
header("location: step2.php");

}

?>