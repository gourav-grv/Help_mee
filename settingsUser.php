<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
    <?php
        session_start();
        require 'dbconection.php';

        $email = $_SESSION['username'];
        $password="";
        $number="";
        $name="";
        $employeeID="";
        $city="";
        $image=NULL;
   
        $sql = "SELECT * FROM `login_user` WHERE email= '$email'";
        $result = mysqli_query($connection, $sql);
        $num = mysqli_num_rows($result);
        
        
        
        while($row=mysqli_fetch_assoc($result)){
            

           $password= $row['password'];
           $name= $row['name'];
           $userID= $row['userid'];
           $number=$row['number'];
           $city=$row['city'];
           $image=$row['image'];
           
        }
       
        if($_SESSION['loginUser']){



        }
        else{
            echo '<script>
            if (confirm("You Want Login First To Visite This Page?") == true) {
                window.location = "loginUser.php";
            } else {
                window.location = "index.php";
            }</script>'; 
            
        }
        include 'afterLoginNavbarUser.php';
        ?>
    <title>Profile_Settings</title>
    <style>
    body {
        font-family: 'Baloo Bhai 2', cursive;
    }

    .container {
        margin-top: 2%;
        padding: 4%;
        border: solid 1px;
        border-color: rgb(54, 10, 10);
        border-radius: 10%;
        /* background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4); */
    }
    </style>
</head>
<?php 

require './html/modalsUser.html';
require_once 'dbconection.php';


if(array_key_exists('name', $_POST)) {
    $name= $_POST['name'];
    $sql = "UPDATE `login_user` SET `name` = '$name' WHERE `login_user`.`userid` = $userID;";
    $result=mysqli_query($connection, $sql);
}  

if(array_key_exists('email', $_POST)) {
    $email= $_POST['email'];
    $sql = "UPDATE `login_user` SET `email` = '$email' WHERE `login_user`.`userid` = $userID;";
    $result=mysqli_query($connection, $sql);
    
    echo '<div class="alert alert-warning text-center" role="alert">
    <h4 class="alert-heading">Login Again!</h4>
    <p>You Must Login Again You Just Change Your Emain </p>
    <hr>
    <p class="mb-0">For Login <a href="loginUser.php">Click here</a></p>
  </div>';
  session_unset();
  session_destroy();

}  
if(array_key_exists('password', $_POST)) {
    $password= $_POST['password'];
    $sql = "UPDATE `login_user` SET `password` = '$password' WHERE `login_user`.`userid` = $userID;";
    $result=mysqli_query($connection, $sql);
    echo '<div class="alert alert-warning text-center" role="alert">
    <h4 class="alert-heading">Login Again!</h4>
    <p>You Must Login Again You Just Change Your Password </p>
    <hr>
    <p class="mb-0">For Login <a href="loginUser.php">Click here</a></p>
  </div>';
  session_unset();
  session_destroy();
}  
if(array_key_exists('number', $_POST)) {
    $number= $_POST['number'];
    $sql = "UPDATE `login_user` SET `number` = '$number' WHERE `login_user`.`userid` = $userID;";
    $result=mysqli_query($connection, $sql);
} 
 
if(array_key_exists('city', $_POST)) {
    $city= $_POST['city'];
    $sql = "UPDATE `login_user` SET `city` = '$city' WHERE `login_user`.`userid` = $userID;";
    $result=mysqli_query($connection, $sql);
}  

if ( $_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['updateDP'])) {
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $sql = "UPDATE `login_user` SET `image` = '$image' WHERE `login_user`.`userid` = $userID;";
    $result=mysqli_query($connection, $sql);
}
?>


<body>
    <div class="container">
        <div class="fluid-container">
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Update Name
                    <span>
                        <button type="button" class="btn btn-success" data-toggle="modal"
                            data-target="#exampleModalname">
                            Update Name
                        </button>
                    </span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Update Email
                    <span>
                        <button type="button" class="btn btn-success" data-toggle="modal"
                            data-target="#exampleModalemail">
                            Update Email
                        </button>
                    </span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Change Password
                    <span>
                        <button type="button" class="btn btn-success" data-toggle="modal"
                            data-target="#exampleModalpassword">
                            Change Password
                        </button>
                    </span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Update Number
                    <span>
                        <button type="button" class="btn btn-success" data-toggle="modal"
                            data-target="#exampleModalnumber">
                            Update Number
                        </button>
                    </span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Update City
                    <span>
                        <button type="button" class="btn btn-success" data-toggle="modal"
                            data-target="#exampleModalcity">
                            Update City
                        </button>
                    </span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Update Image
                    <span>
                        <button type="button" class="btn btn-success" data-toggle="modal"
                            data-target="#exampleModalimage">
                            Update Image
                        </button>
                    </span>
                </li>
            </ul>
        </div>


    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

</body>

</html>