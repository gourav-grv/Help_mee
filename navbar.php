<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <a class="navbar-brand" href="index.php">HELP!mee ?</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <?php
        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {  
           $url = "https://";  
        } 
           else{
            $url = "http://";
           }  
           $url.= $_SERVER['HTTP_HOST'];   
           $url.= $_SERVER['REQUEST_URI'];

           
           if($url=="http://localhost/gourav/HELP_me/index.php" || $url=="http://localhost/gourav/HELP_me/"){
              ?><li class="nav-item ">
                <a class="nav-link active" href="index.php">Home </a>
                <span class="sr-only">(current)</span>
            </li>
            <?php
           }
           else{
            ?><li class="nav-item ">
                <a class="nav-link" href="index.php">Home </a>
                <span class="sr-only">(current)</span>
            </li>
            <?php
           }
           if($url=="http://localhost/gourav/HELP_me/login.php"){
              ?><li class="nav-item active">
                <a class="nav-link" href="login.php">LoginEmployee</a>
            </li>
            <?php
           }
           else{
            ?><li class="nav-item">
                <a class="nav-link" href="login.php">LoginEmployee</a>
            </li>
            <?php
           }
           if($url=="http://localhost/gourav/HELP_me/sinup.php"){
              ?>
            <li class="nav-item active ">
                <a class="nav-link" href="sinup.php">SinupEmployee</a>
            </li><?php
           }
           else{
            ?>
            <li class="nav-item ">
                <a class="nav-link" href="sinup.php">SinupEmployee</a>
            </li><?php
               
           } if($url=="http://localhost/gourav/HELP_me/loginUser.php"){
            ?><li class="nav-item active">
                <a class="nav-link" href="loginUser.php">LoginUser</a>
            </li>
            <?php
         }
         else{
          ?><li class="nav-item">
                <a class="nav-link" href="loginUser.php">LoginUser</a>
            </li>
            <?php
         }
         if($url=="http://localhost/gourav/HELP_me/sinupUser.php"){
            ?>
            <li class="nav-item active ">
                <a class="nav-link" href="sinupUser.php">SinupUser</a>
            </li><?php
         }
         else{
          ?>
            <li class="nav-item ">
                <a class="nav-link" href="sinupUser.php">SinupUser</a>
            </li><?php
             
         }
         if($url=="http://localhost/gourav/HELP_me/contactUs.php"){
            ?>
            <li class="nav-item active ">
                <a class="nav-link" href="contactUs.php">ContactUs</a>
            </li><?php
         }
         else{
          ?>
            <li class="nav-item ">
                <a class="nav-link" href="contactUs.php">ContactUs</a>
            </li><?php
             
         }
         if($url=="http://localhost/gourav/HELP_me/aboutUs.php"){
            ?>
            <li class="nav-item active ">
                <a class="nav-link" href="aboutUs.php">AboutUs</a>
            </li><?php
         }
         else{
          ?>
            <li class="nav-item ">
                <a class="nav-link" href="aboutUs.php">AboutUs</a>
            </li><?php
             
         }
        ?>

        </ul>

        <?php
          if($url=="http://localhost/gourav/HELP_me/index.php" || $url=="http://localhost/gourav/HELP_me/"){
            ?>
        <form class="form-inline my-2 my-lg-0" method="post">
            <input class="form-control mr-sm-2" id="search" name="search" type="search" placeholder="Search"
                aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" id="searchbtn" name="searchbtn"
                type="submit">Search</button>
        </form>
        <?php
         }
        ?>

    </div>
</nav>