<?php

namespace Bridge;

class RawProductRenderer implements ProductRenderer
{
    public function renderProduct(Product $product)
    {
        return 'Product name : ' . $product->getName();
    }

    public function renderProductWithPrice(Product $product)
    {
        return 'Product name : ' . $product->getName().  ' / Product price : ' . $product->getPrice() ;
    }
}
