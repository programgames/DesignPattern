<?php


namespace Patterns\Factory;


class ConfigurableProductFactory extends ProductFactory
{

    public function getProduct(): ProductInterface
    {
        return new ConfigurableProduct();
    }
}