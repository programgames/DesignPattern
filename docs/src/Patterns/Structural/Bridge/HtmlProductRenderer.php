<?php

namespace Bridge;

class HtmlProductRenderer implements ProductRenderer
{
    public function renderProduct(Product $product)
    {
        return '<p><strong> Product name :</strong> ' . $product->getName() . '</p>';
    }

    public function renderProductWithPrice(Product $product)
    {
        return '<p><strong> Product name : </strong>' . $product->getName().  '</p> .
         <p><strong>Product price :</strong> ' . $product->getPrice() .'</p>';
    }
}
