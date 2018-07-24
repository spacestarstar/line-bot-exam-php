<?php



require "vendor/autoload.php";

$access_token = '4u0UYR/UnFNd8KUEO8t3JeZwMVWA+rHZYU+Sj0WVtAUNePeX64EEcMmLad6dSeAt2LgCECjS8hvQiUyPDIfamrTfQiAt0yA2VdTUYRb44XCqtD4PMPYswV35Xng6hM+srfPgmqs2FLwHNbQr7ftRxgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '8d8f27a93ad48011b30aa7164eb0f714';

$pushID = 'U26deb3e56d9589ec4f7350c38d6da17e';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







