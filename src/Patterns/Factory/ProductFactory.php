<?php


namespace Patterns\Factory;


abstract class ProductFactory
{
    abstract public function getProduct() : ProductInterface;

    public function createProduct():string
    {
        echo "Creating a Product ....";

        $product = $this->getProduct();

        echo "Calling a product base function from the factory";
        $product->displayName();
    }
}