<?php

use Decorator\IBuyer;
use Decorator\Product;

function clientCode(IBuyer $buyer, Product $product)
{
    $buyer->buy($product);
}
