    <!-- Zeigt alle User auf Discord  -->
    <div class="row">
        <div class="col-sm">
            <div class="shadow-box">
                <div class="col-sm">
                    <text class="font-color">
                        <a target="_blank" href="https://ifheroes.de/discord" class="link-no-deco">
                            <h3><img src="<?php echo $website_url; ?>/assets/icons/discord-mark-white.svg" class="discord-icon-1" width="30px"> <?php echo $data_lang->home[0]->show_discord_title; ?></h3>
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
            <div class="shadow-box" onclick="copyToClipboardDomain()">
                <div class="col-sm">
                    <text class="font-color">
                        <h3><img src="<?php echo $website_url; ?>/assets/icons/minecraft_icon_138374.svg" class="minecraft-icon-1" class="discord-icon-1" width="30px"> <?php echo $data_lang->home[0]->show_mc_title; ?></h3>
                        <br>
                        <?php
                        $status = json_decode(file_get_contents('https://api.mcstatus.io/v2/status/java/ifheroes.de'));
                        echo $status->players->online;
                        ?> <?php echo $data_lang->home[0]->show_mc_players; ?>
                    </text>
                </div>
            </div>
        </div>
    </div>

</div>
<br>