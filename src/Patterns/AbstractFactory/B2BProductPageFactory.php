<?php


namespace Patterns\AbstractFactory;


class B2BProductPageFactory implements ProductPageFactory
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