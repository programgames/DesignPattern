<?php


namespace Patterns\AbstractFactory;


class B2CPrice implements Price
{
    /**
     * @return string
     */
    public function getValue(): string
    {
        return "20 $";
    }
}