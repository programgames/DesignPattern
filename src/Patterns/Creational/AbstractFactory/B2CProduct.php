<?php


namespace AbstractFactory;

class B2CProduct implements Product
{
    const NAME = "B2C PRODUCT";

    /**
     * @return string
     */
    public function getName(): string
    {
        return self::NAME;
    }
}
