<!--HIDE ON PC-->
<div class="hide-pc">
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <a class="navbar-brand" href="">
            <img class="avatar" src="assets/img/infh-astro-blue.png">
            <text class="color-font" style="font-family: 'NTR' ;margin-left: 7px; color:#333;">INFINITYHEROES</text>

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="?"><?php echo $lang['home_nav'];?><span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="?page=jobs"><?php echo $lang['jobs_nav'];?> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $lang['community_nav'];?> <span class="sr-only">(current)</span></a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="?page=blog"><?php echo $lang['blog_nav'];?> </a>

                    </div>
                </li>
               
            </ul>
        </div>
    </nav>
    <br>
</div>



<!--##HIDE ON MOBILE###-->
<div class="backgroundUI hide-mobile">
    <br>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col col-lg-2" >
            <a href="index.php">
            <img class="avatar-start" style="width: 60px; margin-top: 10px;" src="./assets/img/infh-astro-blue.png">

            </div>
            <div class="col col-lg-2">
                <p></p>
                <h3 style="font-family: 'NTR';margin-left: -90px;padding-top: 9px; color:white;">INFINITYHEROES</h3>
                </a>
            </div>
            <div class="col col-lg-5">
                <br>
                <div class="dropdown" style="margin-right: 6px;">

                    <a href="index.php" class="link-no-deco" style="margin-right: 12px;"><?php echo $lang['home_nav'];?></a>
                    <br>
                    <br>
                </div>
                <div class="dropdown" style="margin-right: 6px;">
                    <a href="index.php?page=jobs" class="link-no-deco" style="margin-right: 12px;"><?php echo $lang['jobs_nav'];?></a>
                    <br>
                    <br>
                </div>
                <div class="dropdown" style="margin-right: 6px;">
                    <span><a href="index.php?page=feedback-overview" class="link-no-deco"><?php echo $lang['community_nav'];?></a> <i class="fas fa-caret-down"></i></i></i></span>
                    <br>
                    <br>
                    <div class="dropdown-content">
                        <a href="index.php?page=blog" class="link-no-deco "><?php echo $lang['blog_nav'];?></a>
                    </div>
                </div>

                <!--NORMAL NAV-->
              
        <br>
         

            </div>
        </div>
    </div>
