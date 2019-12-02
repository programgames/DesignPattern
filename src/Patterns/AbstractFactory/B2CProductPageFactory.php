<?php


namespace Patterns\AbstractFactory;


class B2CProductPageFactory implements ProductPageFactory
{

    public function createProduct(): Product
    {
        return new B2CProduct();
    }

    public function createPrice(): Price
    {
        return new B2CPrice();
    }
}