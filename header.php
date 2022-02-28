<?php 
    session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>PHP Login System</title>
        <link rel="stylesheet" href="./style.css" type="text/css">
    </head>
<body class="d-flex flex-column min-vh-100" style="display: flex; flex-direction: column; min-height: 100vh;">
<header>
<nav class="navbar navbar-expand-lg navbar-light mb-4" style="background-color: rgba(0, 0, 0, 0.05);">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
       
    </ul>

    <ul class="navbar-nav">
     
          <?php if(!isset($_SESSION['usersId'])) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="signup.php">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="login.php">Login</a>
                </li>
          <?php else: ?>
               <li class="nav-item">
                 <a class="nav-link disabled" href="./controllers/Users.php?q=logout">Logout</a>
              </li>
          <?php endif; ?>
    </ul>

  </div>
</nav>
</header>
