<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
$username = $_SESSION['username'];
header("Refresh: 7;url='https://taranis.skeltonkey.xyz/manage/subscriptions'");
?>
<!doctype html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Baskervville">

<style>
body {
    font-family: 'Baskervville';font-size: 22px;
}
</style>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="">
      <img src="/raven.png" width="95" height="70" class="d-inline-block align-left" alt="">
    </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="/">Taranis <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="/login">Login</a>
      <a class="nav-item nav-link" href="/register">Register</a>
      <a class="nav-item nav-link" href="/donate">Donate</a>
      <a class="nav-item nav-link" href="/about">About</a>
    
    </div>
  </div>
</nav>
  <body>

  	<div class="jumbotron">
      <dic class="container">
      <div class="row">
<?php
  $servername = "";
  $username = "";
  $password = "";
  $dbname = "";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM events ORDER BY next ASC";
  $result = $conn->query($sql);



  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
      $tillsec = $row["next"] - time() ;
       $till = $tillsec / 60;
       $eid = $row['eid'];
       $freq = $row['freq'];
       if ($tillsec <= 0) {
       		$till = 'Inactive :(';
       } 
          echo "
          <div class='col-sm-4 py-2'>
          <div class='card'>
            <div class='alert alert-secondary' role='alert'>
              <h3>Event ID: " . $row["eid"]. 
                "<small class='text-mute'> | Name: " . $row["eventname"]. " </small>
              </h3>
            </div>
            <div class='card-body'>
              " . $row["descript"] . "
              <br>
              <hr class='my-4'>
              Minutes Till: " . round($till, 2) . "

              <hr class='my-4'>
              <div class='row'>
              <form method='post' action='process.php'>
              <input type='hidden' id='value' name='value' value='0'>        
              <input type='hidden' id='eid' name='eid' value='$eid'>
              <button type='submit' class='btn btn-primary'>Subscribe</button>
              </form>
              <form method='post' action='process.php'>
              <input type='hidden' id='value' name='value' value='1'>         
              <input type='hidden' id='eid' name='eid' value='$eid'>
              <button type='submit' class='btn btn-danger'>Unsubscribe</button>
              </form>
              <form method='post' action='start.php'>
              <input type='hidden' id='value' name='value' value='1'>         
              <input type='hidden' id='eid' name='eid' value='$eid'>
              <input type='hidden' id='freq' name='freq' value='$freq'>
              <button type='submit' class='btn btn-success'>Start Timer</button>
              </form>
              </div>
            </div>
          </div>
        </div>
";

      }
  } else {
      echo "0 results";
  }
  $conn->close();

?>   		
</div>
</dic>
</div>
</body>
