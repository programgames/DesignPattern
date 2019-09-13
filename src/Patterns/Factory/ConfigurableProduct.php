<?php


namespace Patterns\Factory;


class ConfigurableProduct implements ProductInterface
{
    const NAME = "PRODUCT CONFIGURABLE";


    public function displayName(): string
    {
        echo self::NAME;
    }
}