<?php


namespace Patterns\Factory;


class ConfigurableProduct implements ProductInterface
{
    const NAME = "PRODUCT CONFIGURABLE";


    public function getName(): string
    {
        return self::NAME;
    }
}