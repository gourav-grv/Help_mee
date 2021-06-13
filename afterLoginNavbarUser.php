<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <a class="navbar-brand" href="index.php">HELP!mee ?</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="welcome.php">
                    <?php echo $name. '\'s '; ?>Profile
                </a>
            </li>
            <li class="mx-5">
                <?php
                 if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {  
                    $url = "https://";  
                 } 
                    else{
                     $url = "http://";
                    }  
                    $url.= $_SERVER['HTTP_HOST'];   
                    $url.= $_SERVER['REQUEST_URI'];
          if($url=="http://localhost/gourav/HELP_me/welcomeUser.php"){
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
            </li>

        </ul>


        <ul class="navbar-nav ">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Options
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="welcomeUser.php"><img src="pics/profile.png"
                            style="height: 30px;">&nbsp;Profile </a>
                    <a class="dropdown-item" href="settingsUser.php"><img src="pics/settings.png"
                            style="height: 30px;">&nbsp;Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php"><img src="pics/logout.png"
                            style="height: 25px;">&nbsp;Log Out</a>
                </div>
        </ul>
        <?php
         echo '<img src="data:image/jpeg;base64,'.base64_encode($image).'"height="40px"
         width="40px" style="border-radius: 15px;"/>';
        ?>
        <ul class="navbar-nav ml-3">
            <button type="button" class="btn btn-outline-danger" onclick="window.location.href='logout.php'">Log
                out</button>
            </li>
        </ul>

    </div>
</nav>