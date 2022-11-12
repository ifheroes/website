<!--HIDE ON PC-->
<div class="hide-pc">
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <a class="navbar-brand" href="index.php">
            <img class="avatar" src="assets/img/infh-astro-blue.png">
            <text class="title_ifheroes"><?php echo $data_lang->navbar[0]->title;?></text>

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="?page=jobs"><?php echo $data_lang->navbar[0]->jobs;?><span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="?page=games"><?php echo $data_lang->navbar[0]->games;?><span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="?page=about"><?php echo $data_lang->navbar[0]->about;?><span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="https://github.com/ifheroes"><b><?php echo $data_lang->navbar[0]->github;?></b><span class="sr-only">(current)</span></a>
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
                <h3 style="font-family: 'NTR';margin-left: -90px;padding-top: 9px; color:white;"><?php echo $data_lang->navbar[0]->title;?></h3>
                </a>
            </div>
            <div class="col col-lg-5">
                <br>
                <div class="dropdown" style="margin-right: 6px;">
                    <a href="index.php?page=jobs" class="link-no-deco" style="margin-right: 12px;"><?php echo $data_lang->navbar[0]->jobs;?></a>
                    <br>
                    <br>
                </div>
                <div class="dropdown" style="margin-right: 6px;">
                    <a href="index.php?page=games" class="link-no-deco" style="margin-right: 12px;"><?php echo $data_lang->navbar[0]->games;?></a>
                    <br>
                    <br>
                </div>
                <div class="dropdown" style="margin-right: 6px;">
                    <a href="index.php?page=about" class="link-no-deco" style="margin-right: 12px;"><?php echo $data_lang->navbar[0]->about;?></a>
                    <br>
                    <br>
                </div>
                <div class="dropdown" style="margin-right: 6px;">
                    <b><a href="https://github.com/ifheroes" target="_blank" class="link-no-deco" style="margin-right: 12px;"><?php echo $data_lang->navbar[0]->github;?></b></a>
                    <br>
                    <br>
                </div>

                <!--NORMAL NAV-->
              
        <br>
         

            </div>
        </div>
    </div>