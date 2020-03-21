<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: /login");
    exit;

}
$username = $_SESSION['username'];
?>
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
      <a class="nav-item nav-link" href="/logout">Logout</a>
      <a class="nav-item nav-link" href="/manage/add">Add</a>
      <a class="nav-item nav-link" href="/manage/subscriptions">Subscriptions</a>
      <a class="nav-item nav-link" href="/donate">Donate</a>

    </div>
  </div>
</nav>
  
  </head>
  <body>

  <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Hello and Welcome to Taranis Alerts!</h1>
    <p class="lead">This site sends email alerts to remind you of events!</p>
    <hr class="my-4">
    <p> Here's how it works, to add a new event, navigate to the events tab at the top of your screen, from there, you will see a simple forum with three fields: Name, Minutes, and Description. In the Name field, input the desired name of the event you wish to add. In the minutes field, input the minutes between alerts. Finally, input a brief deacription and any other important info in the Description. Important: Only submit an event at the time you wish for the alerts to be spaced off of. For example, submitting an event at 12:00 with a minutes value of 60 will result in a notification shortly before 1, 2, 3, 4 and so on. To enable notifications for an event navigate to the Subscripptions page at the top of your screen. From there you will see all created events, to subscribe to alerts for an event, press Subscribe.
    </p>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUd
    j0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </div>
  </body>
</html>