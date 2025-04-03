<div class=" white_container">
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <?php

                include('./backend/markdownHandler.php');

                if (isset($_GET['pages'])) {
                    $requested_file = $_GET['pages'];
                    print_r((new markdown())->markdownPrinter($requested_file));
                } elseif (empty($_GET['pages'])) {
                    echo ('404 - Page not found');
                }
                ?>

            </div>
        </div>
    </div>
</div>