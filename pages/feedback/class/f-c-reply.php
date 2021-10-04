<!--KLASSE FÜR NUTZER SYSTEM FÜR SPÄTEREN ZEITPUNKT-->

<div class="container">
    <div class="row">
        <div class="col-sm"></div>
        <div class="col-sm-9">
            <form action="index.php?page=feedback-created&id=<?php echo "$ID"; ?>&reply" method="post">
                <textarea type="text" rows="8" name="textarea" placeholder=" Wie findest du die Idee? Gib deine Antowrt hier ein." required></textarea>
                <br>
                <br>
                <center>
                    <input type="submit" class="btn-grad-top" style="color: white; border: none;" value="Antworten">
                </center>
            </form>
        </div>
        <div class="col-sm"></div>
    </div>
</div>
