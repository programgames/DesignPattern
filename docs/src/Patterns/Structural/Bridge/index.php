<?php

require __DIR__ . './../../../../vendor/autoload.php';
require 'clientCode.php';

use Bridge\RawProductRenderer;
use Bridge\HtmlProductRenderer;
use Bridge\Product;
use Bridge\ProductFullPageController;
use Bridge\ProductSimplePageController;

$rawRenderer = new RawProductRenderer();
$htmlRenderer = new HtmlProductRenderer();

$product = new Product('9.99', 'watermelon');

$controller = new ProductSimplePageController($product, $rawRenderer);
echo "Raw product display :\n";
clientCode($controller);
echo "\n\n";


$controller->changeRenderer($htmlRenderer);

echo "Html product rendered with the same client code:\n";
clientCode($controller);
echo "\n\n";


$controller = new ProductFullPageController($product, $rawRenderer);
echo "We can use another controller with the same interface:\n";
clientCode($controller);
echo "\n\n";
