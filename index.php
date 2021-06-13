<!doctype html>
<html lang="en">
<?php
    session_start();
    if (isset($_SESSION['login']) || isset($_SESSION['loginUser'])) {
        if ($_SESSION['login'] ) {
            header("location: welcome.php");
        
        }
        elseif ($_SESSION['loginUser']) {
            header("location: welcomeUser.php");
        }
    }
    ?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="pics/helpme2.webp">
    <title>Home!</title>
    <style>
    <?php include 'style.css';
    ?>
    </style>
</head>
<?php
  require './navbar.php';
  require './dbconection.php';
  
  ?>

<body>
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://source.unsplash.com/1600x600/?plumber,carpainter" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/1600x600/?electrician" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/1600x600/?sweeper" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <hr>
    <font class="big-font" size="6" style="">OUR SERVICESS IS</font>
    <div class="container-fluid" style="display: flex;flex-wrap: wrap; ">
        <div class="card" style="width: 18rem; flex: 1 1 160px;">
            <a href="loginUser.php">
                <img src="pics/barber.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">BARBER</p>
                </div>
            </a>
        </div>

        <div class="card" style="width: 18rem; flex: 1 1 160px;">
            <a href="loginUser.php">
                <img src="pics/carpenter.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">CARPENTER</p>
                </div>
            </a>
        </div>
        <div class="card" style="width: 18rem; flex: 1 1 160px;">
            <a href="loginUser.php">
                <img src="pics/electritian.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">ELECTRICIAN</p>
                </div>
            </a>
        </div>
        <div class="card" style="width: 18rem; flex: 1 1 160px;">
            <a href="loginUser.php">
                <img src="pics/computerRepair.jpg" style="width: 100%; height: auto;" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">COMPUTER REPAIR</p>
                </div>
            </a>
        </div>
        <div class="card" style="width: 18rem; flex: 1 1 160px;">
            <a href="loginUser.php">
                <img src="pics/mechanic.jpg" style="width: 100%; height: auto;" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">MECHANIC</p>
                </div>
            </a>
        </div>
        <div class="card" style="width: 18rem; flex: 1 1 160px;">
            <a href="loginUser.php">
                <img src="pics/plumber.jpg" style="width: 100%; height: auto;" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">PLUMBER</p>
                </div>
            </a>
        </div>

    </div>
    <div class="container-fluid" style="display: flex; flex-wrap: wrap;">

        <div class="card" style="width: 18rem; flex: 1 1 160px;">
            <a href="loginUser.php">
                <img src="pics/painter.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">PAINER</p>
                </div>
            </a>
        </div>
        <div class="card" style="width: 18rem; flex: 1 1 160px;">
            <a href="loginUser.php">
                <img src="pics/labourpic.jpg" style="width: 100%; height: auto;" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">LABOUR</p>
                </div>
            </a>
        </div>

        <div class="card" style="width: 18rem; flex: 1 1 160px;">
            <a href="loginUser.php">
                <img src="pics/sweeper.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">SWEEPER</p>
                </div>
            </a>
        </div>


        <div class="card" style="width: 18rem; flex: 1 1 160px;">
            <a href="loginUser.php">
                <img src="pics/gardner.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">GARDNER</p>
                </div>
            </a>
        </div>


        <div class="card" style="width: 18rem; flex: 1 1 160px;">
            <a href="loginUser.php">
                <img src="pics/laundryman.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">LAUNDRYMAN</p>
                </div>
            </a>
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
                    Mobile number is <?php echo ''.$number.''; ?>.
                </div>
            </div>
            <?php  
        }
         }
      
	}?><br>
    </div>
        <?php
        include './html/footer.html';
        ?>

    </div>

    </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>