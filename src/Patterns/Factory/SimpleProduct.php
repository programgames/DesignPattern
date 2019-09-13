<?php


namespace Patterns\Factory;


class SimpleProduct implements ProductInterface
{
    const NAME = "SIMPLE PRODUCT";

    public function displayName(): string
    {
        echo self::NAME;
    }
}