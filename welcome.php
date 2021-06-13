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
           $employeeID= $row['employid'];
           $number=$row['number'];
           $proffession=$row['proffession'];
           $city=$row['city'];
           $image=$row['image'];
           
        }
        
        include 'afterLoginNavbar.php';
       
        if($_SESSION['login']){

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
                window.location = "login.php";
            } else {
                window.location = "index.php";
            }</script>'; 
            
        }
        ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Welcome <?php echo $name;?>
    </title>
    <link rel="icon" href="pics/helpme2.webp">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
    body {
        font-family: 'Baloo Bhai 2', cursive;
    }
    </style>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


</head>

<body>
    <div class="container">
        <!-- Modal -->
        <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Notifications</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Number</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Time & Date</th>
                                </tr>
                            </thead>

                            <?php
                            $number="";
                            $name="";
                            $address="";
                            $time_and_date=NULL;
                       
                            $sql = "SELECT * FROM `employee_notification` WHERE email= '$email'";
                            $result = mysqli_query($connection, $sql);
                            $num = mysqli_num_rows($result);
                            
                            
                            while($row=mysqli_fetch_assoc($result)){
                               $name= $row['name'];
                               $number= $row['mobile'];
                               $address=$row['address'];
                               $time_and_date=$row['time_and_date'];
                               echo '
                               <tbody>
                               <tr>
                               <td>'.$name.'</td>
                               <td>'.$number.'</td>
                               <td>'.$address.'</td>
                               <td>'.$time_and_date.'</td>
                             </tr>';
                            }
                            
                        ?>
                            </tbody>
                        </table>
                        <p>Total Notification <?php echo $num; ?> </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

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
                        <li>Proffession is <?php echo ''.$proffession.''; ?> </li>
                        <li>City is <?php echo ''.$city.''; ?> </li>
                        <li>Employee ID is <?php echo '0114'.$employeeID.''; ?> </li>
                        <li>Password is <?php echo ''.$password.''; ?> </li>
                        <li>Mobile number is <?php echo ''.$number.''; ?> </li>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary my-3" data-toggle="modal"
                            data-target="#exampleModal">
                            Notifications &nbsp; <i class="material-icons">add_alert</i>
                        </button> 
                        <p>Total Notification <?php echo $num; ?> </p>
                        


                    </div>
                </div>
            </div>
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