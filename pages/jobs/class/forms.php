<div class="container">
    <div class="row">

        <div class="col-sm">
            <p>
            <a href="javascript:history.back()" class="font-color">
                     <i class="fas fa-angle-left"></i> Zurück zur Übersicht
            </a>
            </p>
        </div>
        <div class="col-sm-7">
            <form action="index.php?page=job-create&send" method="post">
                <input type="text" name="discord_id" placeholder=" Deine Discord ID" pattern=".*#[0-9]{4}" required>
                <br><br>
                <select name="select" required>
                    <option value="Developer">Developer</option>
                    <option value="Moderator">Moderator</option>
                    <option value="Builder">Builder</option>

                </select>
                <br>
                <br>
                <textarea type="text" rows="8" name="textarea" placeholder=" Bitte schreib, warum Du teil unseres Teams werden willst." minlength=100 maxlength="5000" required></textarea>
                <div id="the-count">
                    <span id="current">0</span>
                    <span id="maximum">/ 5000</span> - (min. 100 Buchstaben)
                </div>
                <script>
                    $('textarea').keyup(function() {

                        var characterCount = $(this).val().length,
                            current = $('#current'),
                            maximum = $('#maximum'),
                            theCount = $('#the-count');

                        current.text(characterCount);


                        /*This isn't entirely necessary, just playin around*/
                        if (characterCount < 70) {
                            current.css('color', '#666');
                        }
                        if (characterCount > 4000 && characterCount < 4000) {
                            current.css('color', '#6d5555');
                        }
                        if (characterCount > 4500 && characterCount < 4500) {
                            current.css('color', '#793535');
                        }
                        if (characterCount > 4700 && characterCount < 4700) {
                            current.css('color', '#841c1c');
                        }
                        if (characterCount > 5000 && characterCount < 5000) {
                            current.css('color', '#8f0001');
                        }

                        if (characterCount >= 5000) {
                            maximum.css('color', '#8f0001');
                            current.css('color', '#8f0001');
                            theCount.css('font-weight', 'bold');
                        } else {
                            maximum.css('color', '#666');
                            theCount.css('font-weight', 'normal');
                        }


                    });
                </script>
                <br>
                <br>
                <center>
                    <input type="submit" class="btn-grad-top" value="Submit" style="color: white; border: none;">
                </center>
            </form>

            <?php
            if (isset($_GET['send'])) {

                if (empty($_POST['textarea'] && $_POST['select'] && $_POST['discord_id'])) {
                    echo "<center>Überprüfe, ob alle Felder ausgefüllt wurden.</center>";
                } else {

                    $title = mysqli_real_escape_string($conn, $_POST['discord_id']);
                    $text = mysqli_real_escape_string($conn, $_POST['textarea']);
                    $category = mysqli_real_escape_string($conn, $_POST['select']);

                    $sql = "INSERT INTO jobs (uuid, DS_ID, text, category, closed) VALUES ('$uuid', '$title', '$text', '$category', '0')";
                    if ($conn->query($sql) === TRUE) {

                        $result = mysqli_query($conn, "SELECT * from jobs WHERE uuid ='$uuid' order by date desc limit 1 ;");
                        while ($row = mysqli_fetch_array($result)) {
                            //DISCORD WEBHOOK
                            $hook_title = $row['DS_ID'];
                            $hook_text = substr($row['text'], 0, 100);
                            $hook_ID = $row['ID'];
                            $hook_category = $row['category'];
                            $hook_username = $_SESSION['username'];
                            include('hook-job-create.php');
            ?>
                            <meta http-equiv="refresh" content="0; URL=index.php?page=job-create">
            <?php

                        }
                    }
                }
            }

            ?>