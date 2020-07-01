<?php

namespace Bridge;

class Product
{
    /** @var float */
    private $price;

    /** @var string */
    private $name;

    /**
     * Product constructor.
     * @param float $price
     * @param string $name
     */
    public function __construct(float $price, string $name)
    {
        $this->price = $price;
        $this->name = $name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice(float $price)
    {
        $this->price = $price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
}
