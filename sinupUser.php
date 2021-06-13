<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <style><?php include './css/sinup.css'; ?></style>
    <link rel="icon" href="./pics/helpme2.webp">
    <title>sinupUser!</title>

</head>
<?php


   require_once 'dbconection.php';
   require 'navbar.php';
  
  if ($_SERVER['REQUEST_METHOD']=='POST') {
     $name= $_POST['name'];
     $email= $_POST['email'];
     $password= $_POST['password'];
     $number= $_POST['number'];
     $cpassword= $_POST['cpassword'];
     $city= $_POST['city'];
     $existUser = false;
     $eligible = true;
    
     $existsql= "SELECT * FROM `login_user` WHERE email ='$email'";
     $result=mysqli_query($connection, $existsql);
     $numOfExistRow = mysqli_num_rows($result); 
     $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));


        if($numOfExistRow >0){
        $existUser = true;
        }
        if($password==$cpassword && strlen($number)>=5 && strlen($email)>=5 && strlen($name)>=2){
            

            if($existUser==false){
            //  $hash = password_hash($password, PASSWORD_DEFAULT);
        
             $sql = "INSERT INTO `login_user` (`userid`, `name`, `email`, `password`, `number`,`city`,`image`) 
             VALUES (NULL, '$name', '$email','$password','$number','$city','$image')";
             $result=mysqli_query($connection, $sql);            
             $login = true;
    
              session_start();
              $_SESSION['login']=true;
              $_SESSION['username']=$email;
              $_SESSION['password']=$password;
              header("location: welcomeUser.php");
            }  
        }
        else{
             echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
             <strong>Warning</strong> Passwords do not match or invalid entry.
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>';
        }
       
        if($existUser){
   
         echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
         <strong>Warning</strong> You are already sinup your profile.
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>';
        }
    }
 
  ?>

<body>
    <div class="container">
        <form name="myform" action="sinupUser.php" method="POST" onsubmit="return validate()"
            enctype="multipart/form-data">
            <div class=" form-group ">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" name="name"
                    placeholder="Enter Name">
            </div>
            <label for>Choose Any Image For DP</label>&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="file" id="image" name="image">
            <small id="emailHelp" class="form-text text-muted">In Squre Shape Under 500kb</small><br>

            <div class="form-group">
                <label for>Enter Your Email</label>
                <input type="email" autocomplete="username" class="form-control" id="email" name="email"
                    placeholder=" Enter Email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your Email without reason with
                    anyone
                    else.</small>
            </div>
            <div class="form-group">
                <label for="number">Enter Mobile Number</label>
                <input type="mobile" class="form-control" id="number" name="number" placeholder="Enter Mobile Number">
            </div>

            <div class="form-group">
                <label for="pass">Password</label>
                <input type="password" autocomplete="current-password" class="form-control" id="password"
                    name="password" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label for="cpass">Conform Password</label>
                <input type="password" autocomplete="current-password" class="form-control" id="cpassword"
                    name="cpassword" placeholder="Enter Password Again">
            </div>
            <div class="form-group">
                <label>Choose Your City</label><br>
                <select name="city" id="city" style="background-color: black; color: white;">
                    <option value="Bhopal">Bhopal</option>
                    <option value="Indore">Indore</option>
                    <option value="Sehore">Sehore</option>
                    <option value="Bairagarh">Bairagarh</option>
                    <option value="Mandideep">Mandideep</option>
                </select>
            </div>
            <button type="submit" id="submit" name="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
        </form>
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
        </script>
        <script src="sinup.js"></script>


        <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->

</body>

</html>