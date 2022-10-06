    <!-- Zeigt alle User auf Discord  -->
    <div class="row">
        <div class="col-sm">
            <div class="shadow-box">
                <div class="col-sm">
                    <text class="font-color">
                        <a target="_blank" href="https://ifheroes.de/discord" class="link-no-deco">
                            <h3><i class="fab fa-discord"></i> <?php echo $data_lang->home[0]->show_discord_title; ?></h3>
                            <br>
                            <?php
                            $DiscordjsonData = file_get_contents("https://discordapp.com/api/guilds/355790224527327232/widget.json");
                            $data = json_decode($DiscordjsonData, true);
                            echo $data['presence_count'];
                            ?> <?php echo $data_lang->home[0]->show_discord_players; ?>
                        </a>
                    </text>
                </div>
            </div>
        </div>

        <!-- Zeigt Spieler auf MC -->
        <div class="col-sm">
            <div class="shadow-box">
                <div class="col-sm">
                    <text class="font-color">
                        <h3><i class="fas fa-cube"></i> <?php echo $data_lang->home[0]->show_mc_title; ?></h3>
                        <br>
                        <?php
                        $status = json_decode(file_get_contents('https://api.mcsrvstat.us/2/ifheroes.de'));
                        echo $status->players->online;
                        ?> <?php echo $data_lang->home[0]->show_mc_players; ?>
                    </text>
                </div>
            </div>
        </div>
    </div>

</div>
<br>