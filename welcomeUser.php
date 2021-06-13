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
        
        include 'afterLoginNavbarUser.php';
       
        if($_SESSION['loginUser']){

            echo '<div class="alert alert-success text-center" role="alert">
            <h4 class="alert-heading">Welcome</h4>
            <p>'.$name.' </p>
            <hr>
            <p class="mb-0">You Have Succesfully Login Your Profile</p>
            
          </div>';

        }
        else{
            echo '<script>
            if (confirm("You Want Login First To Visite This Page?") == true) {
                window.location = "loginUser.php";
            } else {
                window.location = "index.php";
            }</script>'; 
            
        }
        if (isset($_POST['notifyButton'])){
            $emailResult=$_POST['emailResult'];
            $sql = "INSERT INTO `employee_notification` (`num`, `name`, `address`, `mobile`, `time_and_date`, `email`) 
            VALUES (NULL, '$name', '$city', '$number', current_timestamp(), '$emailResult');";
            $result=mysqli_query($connection, $sql);

            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Done!</strong> Notification Send To '.$emailResult.'!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>';
        }
        
        ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="icon" href="pics/helpme2.webp">
    <title>Welcome <?php echo $name;?>
    </title>


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    </style>
    <link rel="stylesheet" href="./css/welcomeUser.css">
</head>

<body>
    <div class="container-fluid">
        <div class="card mb-3" style="max-width: 100%;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <?php
                    echo '<img class="card-img"  src="data:image/jpeg;base64,'.base64_encode( $image).'"/>';
                    ?>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $name; ?></h5>
                        <p class="card-text">Wellcome <?php echo ''.$name.''; ?> You Have Successfully Created Account
                            In HELP! mee.</p>
                        <p><b>HERE IS YOUR DETAILS</b></p>
                        <li>Email is <?php echo ''.$email.''; ?> </li>
                        <li>City is <?php echo ''.$city.''; ?> </li>
                        <li>User ID is <?php echo '0533'.$userID.''; ?> </li>
                        <li>Password is <?php echo ''.$password.''; ?> </li>
                        <li>Mobile number is <?php echo ''.$number.''; ?> </li>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <hr>
    <?php
    if (isset($_POST['searchbtn']))
	{
        
        $searchItem= $_POST['search'];
        $sql= "SELECT * FROM `login_employee` WHERE CONCAT(`proffession`) LIKE '%".$searchItem."%'";
        $result=mysqli_query($connection, $sql);
        $numOfExistRow = mysqli_num_rows($result);
        if ($numOfExistRow==0) {
            echo '<font class="big-font" size="6" style="">Oops!... Not Found</font>';
        }
        else {
            echo '<font class="big-font" size="6" style="">Your Search Result '.$searchItem.' Is</font>';
            ?>
            <div class="container-fluid"
                style="display: flex; flex-wrap: wrap; justify-content: center;align-items: center;">
                <?php 
            while($row=mysqli_fetch_assoc($result)){
                $name= $row['name'];
                $email=$row['email'];
                $employeeID= $row['employid'];
                $number=$row['number'];
                $proffession=$row['proffession'];
                $city=$row['city'];
                $image=$row['image'];
                ?>

                <div class="card" style="width: 14rem; ">
                    <?php
                echo '<img class="card-img" height="200px" width="auto"  src="data:image/jpeg;base64,'.base64_encode( $image).'"/>';
                ?>
                    <div class="card-body">
                        <h5><?php echo $name; ?></h5>
                        Proffession is <?php echo ''.$proffession.''; ?><br>
                        Proffession is <?php echo ''.$email.''; ?><br>
                        Mobile number is <?php echo ''.$number.''; ?>.
                        <form action="welcomeUser.php" method="post">

                            <button class="btn btn-outline-warning" id="notifyButton" name="notifyButton"
                                type="submit">Notify</button>
                            <input type='hidden' name='emailResult' value='<?php echo "$email";?>'/> 
                        </form>
                    </div>
                </div>
                <?php  
        }
         }
      
	}
    ?>
            </div>
        </div>
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

</html>