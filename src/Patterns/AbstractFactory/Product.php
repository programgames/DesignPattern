<?php


namespace Patterns\AbstractFactory;


interface Product
{
    /**
     * @return string
     */
    public function getName(): string;
}