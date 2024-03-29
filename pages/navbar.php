<!--Menü für Mobile Devices-->
<div class="hide-pc">
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <a class="navbar-brand" href="index.php">
            <img class="avatar" src="assets/img/infh-astro-blue.png">

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php#survivalMode">Survival</a>
                </li>
                    <?php #todo einbinden des punkts in eine function ins backend
                        $jobs = new jobs();
                        $jobs = new jobs();
                        if ($jobs->jobMenuVisible() == true) {
                            echo '<li class="nav-item active"><a class="nav-link" href="?page=jobs">Bewerben<span class="sr-only"></span></a></li>';
                        }
                    ?>

                <li class="nav-item active">
                    <a class="nav-link" href="?page=about"><?php echo $data_lang->navbar[0]->about; ?><span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="https://ifheroes.de/discord">Discord<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="https://github.com/ifheroes"><b><?php echo $data_lang->navbar[0]->github; ?></b><span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
</div>



<!-- Menü für desktop -->
<div class="backgroundUI hide-mobile">
    <br>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col col-lg-2">
                <a href="index.php">
                    <img class="avatar-start" style="width: 60px; margin-top: 10px;" src="./assets/img/infh-astro-blue.png">

            </div>
            <div class="col col-lg-2">
                <p></p>
                <h3 class="title_ifheroes"><?php echo $data_lang->navbar[0]->title; ?></h3>
                </a>
            </div>
            <div class="col col-lg-5">
                <br>
                <div class="dropdown" style="margin-right: 6px;">
                    <a href="index.php#survivalMode" class="link-no-deco" style="margin-right: 12px;">Survival</a>
                    <br>
                    <br>
                </div>
                <div class="dropdown" style="margin-right: 6px;">
                    <a href="index.php?page=about" class="link-no-deco" style="margin-right: 12px;"><?php echo $data_lang->navbar[0]->about; ?></a>
                    <br>
                    <br>
                </div>

                <?php
                $jobs = new jobs();
                if ($jobs->jobMenuVisible() == true) {
                    echo '
                            <div class="dropdown" style="margin-right: 6px;">
                                <a href="index.php?page=jobs" class="link-no-deco" style="margin-right: 12px;">Bewerben <span class="badge" style="color: white;">NEU</span></a>
                                <br>
                                <br>
                            </div>
                            ';
                }
                ?>

                <div class="dropdown" style="margin-right: 6px;">
                    <b><a href="https://github.com/ifheroes" target="_blank" class="link-no-deco" style="margin-right: 12px;"><?php echo $data_lang->navbar[0]->github; ?></b></a>
                    <br>
                    <br>
                </div>

            </div>
        </div>
    </div>