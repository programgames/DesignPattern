<?php

use AbstractFactory\ProductFactory;

function clientCode(ProductFactory $factory) {

    $product = $factory->createProduct();
    $price = $factory->createPrice();

    echo "TYPE :" . $product->getName() . PHP_EOL;
    echo "PRIX :" . $price->getValue() . PHP_EOL;
}
