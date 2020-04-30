<?php


require __DIR__ . './../../../../vendor/autoload.php';
require 'clientCode.php';

use Structural\Adapter\JsonClient;
use Structural\Adapter\SerializedClient;
use Structural\Adapter\SerializedToJsonAdapter;

$data = [
    'message' => 'Hello world'
];

$json = json_encode($data);

echo "Client code is designed correctly and works with json:\n";
$jsonClient = new JsonClient();
clientCode($jsonClient, $json);
echo "\n\n";

echo "The same client code can work with other classes via adapter:\n";
$adapter = new SerializedToJsonAdapter(new SerializedClient());
clientCode($adapter, $json);