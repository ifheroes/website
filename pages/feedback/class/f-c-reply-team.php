<br>
<div class="container">
    <div class="row">
        <div class="col-sm"></div>
        <div class="col-sm-9">
            <form action="index.php?page=feedback-created&id=<?php echo "$ID"; ?>&reply" method="post">
                <p>
                    <select name="team">
                        <optgroup label="Auswählen"></optgroup>
                        <option value="1">Annehmen</option>
                        <option value="2">Ablehnen</option>
                    </select>
                </p>
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
