<body>
    <center>
        <h1 class="font-color"><?php echo $data_lang->status[0]->status_header?></h1>
    </center>
    <br>

    <!--Jobs übersicht-->


    <?php include('status-class.php'); ?><br><br>

    <!--Mitmachen area !!-->
    <br>
        <center>
                <p>
                    <text class="font-color"><?php echo $data_lang->status[0]->service_not_live?></text>
                </p>
        </center>


        <center>
            <a href="https://discord.gg/YtVYCcYWaW">
                <input type="submit" class="btn-grad-top" value="<?php echo $data_lang->status[0]->get_help?>" style="color: white; border: none;">
            </a>
        </center>

</body>