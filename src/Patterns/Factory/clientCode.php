<?php

use Patterns\Factory\ProductFactory;

function clientCode(ProductFactory $factory)
{
    echo "Client: I'm not aware of the factory's class, but it still works.\n";
         $factory->getProduct();
}