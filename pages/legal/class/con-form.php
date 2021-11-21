<center>
    <h3>Kontaktformular</h3>
</center>
<div class="container">
    <div class="row">
        <div class="col-12">
            <input type="text" name="title" placeholder=" Ihr Anliegen" required>
            <br><br>
            <input type="mail" name="mail" placeholder=" Ihre Mail Adresse" required>
            <br><br>
            <input type="text" name="name" placeholder=" Ihr Vor und Nachname" required>
            <br><br>
            <textarea type="text" rows="8" name="textarea" placeholder="Bitte beschreiben sie ihr Anliegen!" required></textarea>

                <br>
                <br>
                <b>Gebe die Zahlenkombination <kbd><?php echo $pin; ?></b></kbd> ins unten stehende Feld ein! 
                <br>
                <input type='text' name='pin' placeholder="Gib deine PIN ein!" maxlength="4" required></input>
                <br>
                <br>
                <br>

                <input type="checkbox" id="agree" name="agree" required>
                <label for="agree">
                    <div class="font-color">Ich bestätige, das es sich um eine Ernsthafte Anfrage an den Betreiber handelt.</div>
                </label>
                <br>
            <center>
                <input type="submit" class="btn-grad-top" style="color: white; border: none;">
            </center>


        </div>
    </div>
</div>