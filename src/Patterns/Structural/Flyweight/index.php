<?php

require __DIR__ . './../../../../vendor/autoload.php';

require 'clientCode.php';

use Flyweight\ProductFlyWeightFactory;
use Flyweight\Website;

$discountShop = new Website("DISCOUNTSHOP");
$shopOfDeal = new Website("SHOPOFDEAL");

$discountShopsProduct = [];
$shopOfDealProducts = [];

// USAGE OF FLYWEIGHT :

$factory = new ProductFlyWeightFactory([$discountShop]);


$factory->listFlyweights();

for ($i = 0; $i < 1000000 ; $i++) {
    $name = generateRandomString();
    $price = 10;

    $discountShopsProducts[] = addProductToDatabase($factory, $discountShop, $name, $price);

    $shopOfDealProducts[] = addProductToDatabase($factory, $shopOfDeal, $name, $price);
}

$factory->listFlyweights();

displayRam();
