<?php

use Factory\ProductFactory;

function clientCode(ProductFactory $factory)
{
    echo "Client: I'm not aware of the factory's class, but it still works.\n";
         $product = $factory->createProduct();
         echo $product->getName();
}