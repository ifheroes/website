<?php
$hookObject = json_encode([
    "username" => "infinityheroes.de",
    "content" => "> <@&355790281146105857> <@&645217207286235156>",
    "tts" => false,
    "embeds" => [
        [
            "title" => "infinityheroes.de",
            "type" => "rich",
            "description" => "Rufe die Webseite auf, um die Bewerbung zu lesen.",
            "url" => "$website_url/index.php?page=acp-jobs",
            "color" => hexdec( "FFFFFF" ),
            "footer" => [
                        "text" => "ifheroes.de - Bewerbung",
                        ],          
            "author" => [
                "name" => "Discord ID: $hook_title - $hook_category",
            ],
        ]
    ]

], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

$ch = curl_init();

curl_setopt_array( $ch, [
    CURLOPT_URL => $discord_url_jobs,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $hookObject,
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/json"
    ]
]);

$response = curl_exec( $ch );
curl_close( $ch );
