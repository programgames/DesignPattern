<?php


namespace Factory;

class SimpleProductFactory extends ProductFactory
{

    public function createProduct(): ProductInterface
    {
        return new SimpleProduct();
    }
}