<?php

class apiHandler
{

    private $token;
    private $api_key;

    # vars for content

    public $users_online;
    public $invite_url;
    public $news_title;
    public $news_text;
    public $news_image;
    public $news_date;
    public $news_file_id;


    public function getKeyFile($service_name)
    {
        # general request to key file

        #get /sec/api-key.json
        $data = file_get_contents('../backend/sec/api-keys.json', true);

        #JSON decode
        $obj = json_decode($data);

        $this->token = $obj->$service_name[0]->token;
        $this->api_key = $obj->$service_name[0]->key;
    }


    # function to get the news by id via api
    public function apiGetNewsLatest($id)
    {
        #connect to api
        $headers = array(
            "Content-Type: application/json"
        );


        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://api.ifheroes.de/v1/news/');
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        curl_close($curl);

        $news = json_decode($result, true);

        $this->news_title = $news[$id]['title'];
        $this->news_text = $news[$id]['text'];
        $this->news_image = $news[$id]['image'];
        $this->news_date = $news[$id]['date'];
        $this->news_file_id = $news[$id]['file_id'];
    }


    public function apiGetDiscordServer()
    {
        $request = json_decode(file_get_contents('https://discordapp.com/api/guilds/355790224527327232/widget.json', true));

            $this->users_online = $request->presence_count;
            $this->invite_url = $request->instant_invite;
    }


    public function apiGetMinecraftServer()
    {
        $request = json_decode(file_get_contents('https://api.mcstatus.io/v2/status/java/ifheroes.de', true));
            $request->players->online;
            $request->players->max;
    }
}


/* $apiHandler = new apiHandler();
$apiHandler->apiGetDiscordServer();

// Gib die invite_url aus
echo $apiHandler->users_online; */
