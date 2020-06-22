<?php


namespace AbstractFactory;

class B2BProduct implements Product
{
    const B2BProduct = "B2B PRODUCT";

    /**
     * @return string
     */
    public function getName(): string
    {
        return self::B2BProduct;
    }
}
