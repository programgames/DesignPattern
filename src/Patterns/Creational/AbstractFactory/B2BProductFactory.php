<?php


namespace AbstractFactory;

class B2BProductFactory implements ProductFactory
{
    public function createProduct(): Product
    {
        return new B2BProduct();
    }

    public function createPrice(): Price
    {
        return new B2BPrice();
    }
}
