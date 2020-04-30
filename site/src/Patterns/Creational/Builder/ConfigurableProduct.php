<?php


namespace Builder;


class ConfigurableProduct
{
    public $name;

    public $description;

    public $variants;

    public function displayInfo(): void
    {
        echo "Name : " . $this->name . " Description : " . $this->description . PHP_EOL;
    }
}