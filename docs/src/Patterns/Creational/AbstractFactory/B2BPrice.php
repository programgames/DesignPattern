<?php


namespace AbstractFactory;

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
