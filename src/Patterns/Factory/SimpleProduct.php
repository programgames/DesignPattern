<?php


namespace Patterns\Factory;


class SimpleProduct implements ProductInterface
{
    const NAME = "SIMPLE PRODUCT";

    public function getName(): string
    {
        return self::NAME;
    }
}