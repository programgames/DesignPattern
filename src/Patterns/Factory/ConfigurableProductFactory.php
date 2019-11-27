<?php


namespace Patterns\Factory;


class ConfigurableProductFactory extends ProductFactory
{

    public function createProduct(): ProductInterface
    {
        return new ConfigurableProduct();
    }
}