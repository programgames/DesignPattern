<?php

require __DIR__ . './../../../../vendor/autoload.php';

require 'clientCode.php';

use Flyweight\Product;
use Flyweight\Website;

$discountShop = new Website("DISCOUNTSHOP");
$shopOfDeal = new Website("SHOPOFDEAL");

//No flyweight usage

$products = [];

for ($i = 0; $i < 1000000 ; $i++) {
    $products[] =  new Product(generateRandomString(), $discountShop);
    $products[] =  new Product(generateRandomString(), $discountShop);
}

displayRam();
