<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="icon" href="pics/helpme2.webp">
    <title>Logout</title>
</head>
<?php
require 'navbar.php';
    
    session_start();
    if(!isset($_SESSION['login']) && isset($_SESSION['login'])!=true && !isset($_SESSION['loginUser']) && isset($_SESSION['loginUser'])!=true){
      
      echo '<div class="alert alert-warning text-center" role="alert">
      <h4 class="alert-heading">Login First!</h4>
      <p>You Must Login Fist </p>
      <hr>
      <p class="mb-0">For Login <a href="login.php">Click here</a></p>
    </div>';
      
    }

    else{
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Hy '. $_SESSION['username'].'</strong> You Have Successfull logout.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
      
    }
    
    ?>

<body>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>
<?php
  session_unset();
  session_destroy();
  ?>

</html>