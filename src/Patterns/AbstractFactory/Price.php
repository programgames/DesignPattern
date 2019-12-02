<?php


namespace Patterns\AbstractFactory;


interface Price
{
    /**
     * @return string
     */
    public function getValue() : string;
}