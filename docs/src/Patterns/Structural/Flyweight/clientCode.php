<?php

use Flyweight\ProductFlyWeightFactory;
use Flyweight\Website;

function addProductToDatabase(ProductFlyWeightFactory $ff, Website $website, string $name, float $price)
{
    echo "\nClient: Adding a car to database.\n";
    $flyweight = $ff->getFlyweight($website);

    $flyweight->affichageInfo($name);

    return $flyweight;
}

function generateRandomString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function displayRam()
{
    echo 'Memory in use: ' . (memory_get_usage() / 1024) / 1024 . 'MB';
}
