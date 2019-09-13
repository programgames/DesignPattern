<?php


namespace Patterns\Factory;


class SimpleProductFactory extends ProductFactory
{

    public function getProduct(): ProductInterface
    {
        return new SimpleProduct();
    }
}