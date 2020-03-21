<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: /login");
exit;
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="/">
      <img src="/garrisonbrand.png" width="95" height="70" class="d-inline-block align-left" alt="">
    </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
              <div class="btn-group">
                  <a href="/raids" class="btn btn-link nav-link">Raids</a>
                  <a href="#" class="btn btn-link nav-link dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="sr-only">Toggle Dropdown</span>
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="/raids/levi">Leviathan</a>
                    <a class="dropdown-item" href="/raids/eow">Eater of Worlds</a>
                    <a class="dropdown-item" href="/raids/spire">Spire of Stars</a>
                    <a class="dropdown-item" href="/raids/lastwish">Last Wish</a>
                    <a class="dropdown-item" href="/raids/sotp">Scourge of the Past</a>
                    <a class="dropdown-item" href="/raids/cos">Crown of Sorrow</a>
                    <a class="dropdown-item" href="/raids/gos">Garden of Salvation</a>
                  </div>
              </div>
          </li>
          <li class="nav-item dropdown">
              <div class="btn-group">
                  <a href="#" class="btn btn-link nav-link">Dungeons</a>
                  <a href="#" class="btn btn-link nav-link dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="sr-only">Toggle Dropdown</span>
                  </a>
                  <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Shattered Throne</a>
                          <a class="dropdown-item" href="#">Pit of Heresy</a>
                  </div>
              </div>
          </li>
          <li class="nav-item dropdown">
              <div class="btn-group">
                  <a href="#" class="btn btn-link nav-link">Clan Stats</a>
                  <a href="#" class="btn btn-link nav-link dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="sr-only">Toggle Dropdown</span>
                  </a>
                  <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">PVP</a>
                          <a class="dropdown-item" href="#">PVE</a>
                  </div>
              </div>
          </li>
        </ul>
      </div>
    </nav>
  </head>
  <body>
<div class="jumbotron">
	<div class="row">
		<div class="col-4">
			<div class="card-body">
			</div>
		</div>
		<div class="col-8">
			<div class="card-body">
			</div>
		</div>
	</div>
</div>
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
