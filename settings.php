<!doctype html>
<html lang="en">

<head>
    <?php
     session_start();
     require 'dbconection.php';

     $email = $_SESSION['username'];
     $password="";
     $number="";
     $name="";
     $employeeID="";
     $proffession="";
     $city="";
     $image=NULL;

     $sql = "SELECT * FROM `login_employee` WHERE email= '$email'";
     $result = mysqli_query($connection, $sql);
     $num = mysqli_num_rows($result);
     
     
     
     while($row=mysqli_fetch_assoc($result)){
         

        $password= $row['password'];
        $name= $row['name'];
        $email= $row['email'];
        $employeeID= $row['employid'];
        $number=$row['number'];
        $proffession=$row['proffession'];
        $city=$row['city'];
        $image=$row['image'];
        
     }
     
     include 'afterLoginNavbar.php';
     if($_SESSION['login']){
     }
    else{
        echo '<script>
        if (confirm("You Want Login First To Visite This Page?") == true) {
            window.location = "login.php";
        } else {
            window.location = "index.php";
        }</script>'; 
        
    }
     ?>
    <!-- Required meta tags -->
    <title>Profile Settings</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="pics/helpme2.webp">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


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

require './html/modals.html';
require_once 'dbconection.php';


if(array_key_exists('name', $_POST)) {
    $name= $_POST['name'];
    $sql = "UPDATE `login_employee` SET `name` = '$name' WHERE `login_employee`.`employid` = $employeeID;";
    $result=mysqli_query($connection, $sql);
}  

if(array_key_exists('email', $_POST)) {
    $email= $_POST['email'];
    $sql = "UPDATE `login_employee` SET `email` = '$email' WHERE `login_employee`.`employid` = $employeeID;";
    $result=mysqli_query($connection, $sql);
    
    echo '<div class="alert alert-warning text-center" role="alert">
    <h4 class="alert-heading">Login Again!</h4>
    <p>You Must Login Again You Just Change Your Emain </p>
    <hr>
    <p class="mb-0">For Login <a href="login.php">Click here</a></p>
  </div>';
  session_unset();
  session_destroy();

}  
if(array_key_exists('password', $_POST)) {
    $password= $_POST['password'];
    $sql = "UPDATE `login_employee` SET `password` = '$password' WHERE `login_employee`.`employid` = $employeeID;";
    $result=mysqli_query($connection, $sql);
    echo '<div class="alert alert-warning text-center" role="alert">
    <h4 class="alert-heading">Login Again!</h4>
    <p>You Must Login Again You Just Change Your Password </p>
    <hr>
    <p class="mb-0">For Login <a href="login.php">Click here</a></p>
  </div>';
  session_unset();
  session_destroy();
}  
if(array_key_exists('number', $_POST)) {
    $number= $_POST['number'];
    $sql = "UPDATE `login_employee` SET `number` = '$number' WHERE `login_employee`.`employid` = $employeeID;";
    $result=mysqli_query($connection, $sql);
} 
if(array_key_exists('proffession', $_POST)) {
    $proffessionTwo= $_POST['proffession'];
    $sql = "UPDATE `login_employee` SET `proffession` = CONCAT('$proffession' , ',$proffessionTwo') WHERE `login_employee`.`employid` = $employeeID;";
    $result=mysqli_query($connection, $sql);
}   
if(array_key_exists('city', $_POST)) {
    $cityTwo= $_POST['city'];
    $sql = "UPDATE `login_employee` SET `city` = CONCAT('$city' , ',$cityTwo') WHERE `login_employee`.`employid` = $employeeID;";
    $result=mysqli_query($connection, $sql);
}  

if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['updateDP'])) {
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $sql = "UPDATE `login_employee` SET `image` = '$image' WHERE `login_employee`.`employid` = $employeeID;";
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
                    Update Profession
                    <span>
                        <button type="button" class="btn btn-success" data-toggle="modal"
                            data-target="#exampleModalproffesstion">
                            Add Another Profession
                        </button>
                    </span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Update City
                    <span>
                        <button type="button" class="btn btn-success" data-toggle="modal"
                            data-target="#exampleModalcity">
                            Add Another City
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
<!-- UPDATE `login_employee` SET `name` = 'GRV guruji' WHERE `login_employee`.`employid` = 59; -->


<!-- <form name="myform" action="settings.php" method="POST" onsubmit="return validate()" enctype="multipart/form-data">
    <div class="form-row">
        <div class="col col-md-6" style="display:flex;">
            <input type="text" class="form-control mx-2" id="name" placeholder="Full Name">
            <button type="button" class="btn btn-success">Update</button>
        </div>
        <div class="col col-md-6" style="display:flex;">
            <input type="text" class="form-control mx-2" id="email" placeholder="Email">
            <button type="button" class="btn btn-success">Update</button>
        </div>
        <div class="col col-md-6" style="display:flex;">
            <input type="text" class="form-control mx-2" id="password" placeholder="Password">
        </div>
        <div class="col col-md-6" style="display:flex;">
            <input type="text" class="form-control mx-2" id="cpassword" placeholder="Conform Password">
            <button type="button" class="btn btn-success">Update</button>
        </div>
        <div class="col col-md-6" style="display:flex;">
            <input type="text" class="form-control mx-2" id="number" placeholder="Number">
            <button type="button" class="btn btn-success">Update</button>
        </div>
        <div class="col col-md-6" style="display:flex;">
            <select name="proffession" id="proffession" class="form-control mx-2">
                <option value="Electrician( बिजली कारीगर )">Electrician ( बिजली कारीगर )</option>
                <option value="Carpenter( बढ़ई )">Carpenter ( बढ़ई )</option>
                <option value="Plumber( नलकार )">Plumber ( नलकार )</option>
                <option value="Laundryman( धोबी )">Barber ( नाई )</option>
                <option value="Mechanic( मैकेनिक )">Mechanic ( मैकेनिक )</option>
                <option value="Painter( पेंटर )">Painter ( पेंटर )</option>
                <option value="Labour( श्रम )">Labour ( श्रम )</option>
                <option value="Sweeper( सफ़ाईवाला )">Sweeper ( सफ़ाईवाला )</option>
                <option value="Gardner( माली )">Gardner ( माली )</option>
                <option value="Laundryman( धोबी )">Laundryman ( धोबी )</option>
            </select>
            <button type="button" class="btn btn-success">Update</button>
        </div>
        <div class="col col-md-12" style="display:flex;">
            <input type="text" class="form-control mx-2" id="city" placeholder="City">
            <button type="button" class="btn btn-success">Update</button>
        </div>
        <div class="col col-md-12" style="display:flex;">
            <div style="display:flex;">
                <input type="file" class="form-control mx-2" id="image" accept=".jpg,.png,.gif,.jpeg" name="image">
            </div>
            <button type="button" class="btn btn-success">Update</button>
        </div>
    </div>
    <button type="submit" id="submit" class="btn btn-primary btn-lg btn-block">Update Full Data</button>
</form> -->