<?php
$hookObject = json_encode([
    "username" => "infinityheroes.space",
    "tts" => false,
    "embeds" => [
        [
            "title" => "infinityheroes.space",
            "type" => "rich",
            "description" => "$hook_text...",
            "url" => "$website_url/index.php?page=feedback-created&id=$hook_ID ",
            "color" => hexdec( "FFFFFF" ),
            "footer" => [
                "text" => "infinityheroes.space - Feedback",
                ],
            "author" => [
                "name" => "$hook_title",
            ],
        ]
    ]

], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

$ch = curl_init();

curl_setopt_array( $ch, [
    CURLOPT_URL => $discord_url_feedback,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $hookObject,
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/json"
    ]
]);

$response = curl_exec( $ch );
curl_close( $ch );

?>

