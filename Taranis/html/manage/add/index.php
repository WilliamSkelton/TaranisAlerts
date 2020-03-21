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
      <a class="navbar-brand" href="">
      <img src="/raven.png" width="95" height="70" class="d-inline-block align-left" alt="">
    </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
    </nav>
  </head>
  <body>
  <form method="post" action="process.php">
    <div class="jumbotron">
      <div class="form-group">
          <label for="eventname">Event Name</label>
          <input type="text" class="form-control" id="eventname" name="eventname" aria-describedby="eventNameHelp" placeholder="Event">
          <small id="eventNameHelp" class="form-text text-muted"> Name the event!</small>
      </div>
      <div class="form-group">
        
        <label for="hour">Minutes between alerts</label>
        <input type="text" name="minute" class="form-control" id="minute" placeholder="Minutes"><br>
        <label for="desc">Event Description</label>
        <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>

      </div>
      <div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUd
    j0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </div>
  </body>
</html>