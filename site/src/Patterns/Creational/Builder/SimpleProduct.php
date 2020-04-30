<?php


namespace Builder;


class SimpleProduct
{
    public $name;

    public $description;

    public $price;

    public function displayInfo(): void
    {
        echo "Name : " . $this->name . " Description : " . $this->description . " Price : " . $this->price . PHP_EOL;
    }
}