<?php



require "vendor/autoload.php";

$access_token = 'd4RK33gTTTGWvOZP0AloggELk4d77bvFvKrvqqKkqvwT7htuaKsvlhkGyW0naT++Kb2AtVWth35/jl3qsiZYOZF7sXUk83GHGU2VvLrsWAwNTKwYskdA8FcVHCu0cJ5Nm5fWoSin6NfDeKZO9OWVmwdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'f81158d9a3d2fac17b3e73087c192bcc';

$pushID = 'U515134976726c2b18cca479791ec5fa2';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







