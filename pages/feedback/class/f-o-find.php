<div class="container">
        <div class="row">
            <div class="col-12">
                <br>
                <form action="index.php?page=feedback-overview&search" method="post">
                    <input type="text" name="search" id="search"  placeholder=" Suchen..."value="<?php if (isset($_POST['search'])) {
                                                                                                                    echo $_POST['search'];
                                                                                                                } ?>">
                </form>
            </div>
            <div class="col-sm hide-mobile">
            </div>
        </div>
