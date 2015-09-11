<?php
require __DIR__."/vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'http://www.zeroplace.cn/',
    'timeout'  => 2.0,
]);

$res = $client->request("GET", "/");
echo $res->getStatusCode(), "\n";
foreach ($res->getHeaders() as $name => $values) {
    echo $name . ': ' . implode(', ', $values) . "\r\n";
}

$body = $res->getBody();
echo $body;