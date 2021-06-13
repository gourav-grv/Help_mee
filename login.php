<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="pics/helpme2.webp">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
    <?php include './css/login.css';
    ?>
    </style>

    <title>login</title>
</head>
<?php

      require 'dbconection.php';
      include 'navbar.php';
     if ($_SERVER['REQUEST_METHOD']=='POST') {
    
     $email= $_POST['email'];
     $password= $_POST['password'];

     $login = false;
     $errr=false;
     



     $sql = "SELECT * FROM `login_employee` WHERE email= '$email'";

     $result = mysqli_query($connection, $sql);
     
     $num = mysqli_num_rows($result);
    
      if($num == 1){
        while($row = mysqli_fetch_assoc($result)){
            


          if ($password ==  $row['password'] ) {
          $login = true;
          session_start();
          $_SESSION['login']=true;
          $_SESSION['username']=$email;
          $_SESSION['password']=$password;
          header("location: welcome.php");
         
          }
          else {
            $errr= true;
          }

        }     
      }  
      else {
        $errr= true;
      }

   
    if($login){
        
        echo('<div class="alert alert-success alert-dismissible fade show" role="alert">
           <strong>Success</strong> You Have Successfully login.
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
           </button>
           </div>'); 
    }
    elseif ($errr) {
      echo('<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Warning</strong> you are stranger for us.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      </div>'); 
    }
  }
  ?>

<body>
    <div class="fluid-container mainContainer">
        <div class="containerLeft">
            <p style="padding: 20px;"><b> LOGIN <spam style="color:#0652DD;">HELP! mee </b></spam>
            </p>
            <p class="login_heading text-center">Log In to Account</p>
            <div class="container">
                <div class="container my-5">
                    <form action="login.php" method="POST" onsubmit="return validate()">
                        <div class="form-group ">
                            <label for="email">Email address</label>
                            <input type="text" autocomplete="username" class="form-control" id="email"
                                aria-describedby="email" name="email" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="pass">Password</label>
                            <input type="password" autocomplete="current-password" class="form-control" id="password"
                                name="password" placeholder="Enter Password">
                        </div>
                        <button type="submit" id="submit" name="submit"
                            class="btn btn-primary  btn-block my-2">Submit</button>

                    </form>
                    <button onclick="location.href = 'sinup.php';" class="btn btn-warning btn-block ">Sinup</button>
                </div>
            </div>

        </div>
        <div class="containerRight">
        <p class="Right_heading text-center my-5">Hello Friend </p>
        <p class="text-center">Fill up personal information and start jurney with us</p>
        </div>

    </div>

    <!-- <div class="container">
        <form action="login.php" method="POST" onsubmit="return validate()">
            <div class="form-group ">
                <label for="email">Email address</label>
                <input type="text" autocomplete="username" class="form-control" id="email" aria-describedby="email"
                    name="email" placeholder="Enter Email">
                <small id="email" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="pass">Password</label>
                <input type="password" autocomplete="current-password" class="form-control" id="password"
                    name="password" placeholder="Enter Password">
            </div>
            <button type="submit" id="submit" name="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
            
        </form>
        <button onclick="location.href = 'sinup.php';" class="btn btn-warning btn-lg btn-block my-2">Sinup</button>
    </div> -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script>
    function validate() {

        let email = String(document.getElementById("email").value);
        if (email.length <= 3) {
            alert("Please Fill Email");
            return false;
        }
        var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

        if (!email.match(mailformat)) {
            alert("Please Enter Valid Email");
            return false;
        }
    }
    </script>


</body>

</html>