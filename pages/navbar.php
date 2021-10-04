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
                    <a class="nav-link" href="index.php?page=support" ><?php echo $lang['support_nav'];?> </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $lang['community_nav'];?> <span class="sr-only">(current)</span></a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="index.php?page=feedback-overview"><?php echo $lang['feedback_nav'];?></a>
                        <a class="dropdown-item" href="?page=blog"><?php echo $lang['blog_nav'];?> </a>
                        <a class="dropdown-item" href="?page=broadcaster"><?php echo $lang['broadcaster_nav'];?> </a>

                    </div>
                </li>
                <?php if (!isset($_SESSION['username'])) {?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Los geht's!</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="?page=register"><?php echo $lang['signup_nav'];?></a>
                        <a class="dropdown-item" href="?page=login"><?php echo $lang['login_nav'];?></a>
                    </div>
                </li>
                <?php }else{?>

                            
                        <?php
                            $result = mysqli_query($conn, "SELECT * FROM users WHERE uuid = '$uuid'");
                                while ($row = mysqli_fetch_array($result)) {
                            ?>

                            <span>
                                    <img class="avatar " src="<?php echo $row['avatar']; ?>" style="width: 30px;height:30px;"> 
                                    <?php if (isset($row['verified']) && $row['verified'] !== '0') { ?>
                                <img src="<?php echo $website_url;?>/assets/img/verified.svg" class="verified">
                                    <?php } ?>
                            
                            </span>


                            <a class="dropdown-item" href="?page=profile&user=<?php echo $row['username'];?>"><?php echo $ses_user;?></a>
                            <a class="dropdown-item" href="?page=ticket-overview"><?php echo $lang['tickets_nav'];?></a>
                            <a class="dropdown-item" href="?page=settings"><?php echo $lang['settings_nav'];?></a>
                            <br>
                            <?php include('navbar/class/check-acp.php');?>
                            <br>
                            <a class="dropdown-item" href="?page=logout">Logout</a>
                </ul>           
                <?php }?>          
                <?php }?>
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
                <div class="dropdown" style="margin-right: 12px;">
                    <span><a href="index.php?page=support" class="link-no-deco"><?php echo $lang['support_nav'];?> </a></span>
                    <br>
                    <br>

                </div>
                <div class="dropdown" style="margin-right: 6px;">
                    <span><a href="index.php?page=feedback-overview" class="link-no-deco"><?php echo $lang['community_nav'];?></a> <i class="fas fa-caret-down"></i></i></i></span>
                    <br>
                    <br>
                    <div class="dropdown-content">
                        <a href="index.php?page=broadcaster" class="link-no-deco "><?php echo $lang['broadcaster_nav'];?></a>
                        <br>
                        <a href="index.php?page=feedback-overview" class="link-no-deco "><?php echo $lang['feedback_nav'];?> <?php include('./pages/main/navbar/class/gettopics.php');?></a>
                        <br>
                        <a href="index.php?page=blog" class="link-no-deco "><?php echo $lang['blog_nav'];?></a>
                    </div>
                </div>

                <!--NORMAL NAV-->
                <?php if (!isset($_SESSION['username'])) {?>
                    <div class="dropdown" style="margin-right: 1px;">
                    <span><a href="" class="link-no-deco"> <img src="assets/img/white-user.svg " style="margin-left: 2px; " width="20px "></text></a></span>
                    <br>
                    <br>
                    <div class="dropdown-content">
                        <a href="index.php?page=login" class="link-no-deco"><?php echo $lang['login_nav'];?></a>
                        <br>
                        <a href="index.php?page=register" class="link-no-deco "><?php echo $lang['signup_nav'];?></a>

                    </div>
                </div>                   
                <?php } else {?>
                    <?php
                    $result = mysqli_query($conn, "SELECT * FROM users WHERE uuid = '$uuid'");
                        while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <div class="dropdown" style="margin-right: 1px;">
                        <span>
                            <a href="?page=profile&user=<?php echo $ses_user;?>">
                            <img class="avatar " src="<?php echo $row['avatar']; ?>" style="width: 30px;height:30px;">
                            <!--IF VERIFIED-->
                            <?php if (isset($row['verified']) && $row['verified'] !== '0') { ?>
                                <img src="<?php echo $website_url;?>/assets/img/verified.svg" class="verified">
                                    <?php } ?>
                        </a>
                        </span>
                        <?php }?> 
                        <br>
                        <br>
                        <div class="dropdown-content">
                            <a href="?page=profile&user=<?php echo $ses_user;?>" class="link-no-deco"><?php echo $ses_user;?></a>
                            <br>
                            <a href="?page=ticket-overview" class="link-no-deco ">Tickets <?php include('./pages/main/navbar/class/gettickets.php');?></a>
                            <br>
                            <a href="?page=settings" class="link-no-deco "><?php echo $lang['settings_nav'];?></a>
                            <hr>
                            <a href="?page=logout" class="link-no-deco"><?php echo $lang['logout_nav'];?></a>
                                    <!--ACP CHECK-->    
                            <?php include('navbar/class/check-acp.php');?>
                            </div>
                    </div>
                <?php }?>
                <!--LOGEDIN NAV-->

                <br> <br>
        <br>
         

            </div>
        </div>
    </div>
