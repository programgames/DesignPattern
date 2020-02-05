<?php


namespace Factory;


abstract class ProductFactory
{
    abstract public function createProduct() : ProductInterface;

    public function displayProduct():string
    {
        echo "Creating a Product ....";

        $product = $this->createProduct();

        echo "Calling a product base function from the factory";
        echo $product->getName();
    }
}