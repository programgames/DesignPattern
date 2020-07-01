<?php

require __DIR__ . './../../../../vendor/autoload.php';
require 'clientCode.php';

use Decorator\BaseCustomer;
use Decorator\BaseCustomerDecorator;
use Decorator\Product;

$product = new Product("Iphone", "999");

echo "The client code is supporting the BaseCustomerObject" .PHP_EOL;
$simpleCustomer = new BaseCustomer();
clientCode($simpleCustomer, $product);

echo PHP_EOL . PHP_EOL;

echo "But it can support a decorated Customer aswell" . PHP_EOL;
$customerWithHistoric = new BaseCustomerDecorator($simpleCustomer);
clientCode($customerWithHistoric, $product);
