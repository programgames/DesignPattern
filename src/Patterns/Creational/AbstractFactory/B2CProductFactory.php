<?php


namespace AbstractFactory;

class B2CProductFactory implements ProductFactory
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
