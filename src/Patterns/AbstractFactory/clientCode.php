<?php


use Patterns\AbstractFactory\ProductPageFactory;

function clientCode(ProductPageFactory $factory) {

    $product = $factory->createProduct();
    $price = $factory->createPrice();

    echo "TYPE :" . $product->getName() . PHP_EOL;
    echo "PRIX :" . $price->getValue() . PHP_EOL;
}
