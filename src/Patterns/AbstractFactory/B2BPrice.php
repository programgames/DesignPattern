<?php


namespace Patterns\AbstractFactory;


class B2BPrice implements Price
{

    /**
     * @return string
     */
    public function getValue(): string
    {
        return "20000 $";
    }
}