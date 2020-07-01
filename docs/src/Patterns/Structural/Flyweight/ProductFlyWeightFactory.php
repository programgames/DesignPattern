<?php

namespace Flyweight;

class ProductFlyWeightFactory
{
    /**
     * @var ProductFlyweight[]
     */
    private $productFlyweight = [];

    /**
     * ProductFlyWeightFactory constructor.
     * @param array $productFlyweights
     */
    public function __construct(array $productFlyweights)
    {
        foreach ($productFlyweights as $state) {
            $this->productFlyweight[$this->getKey($state)] = new ProductFlyweight($state);
        }
    }

    private function getKey(Website $website): string
    {
        return $website->getName();
    }

    /**
     * @param Website $website
     * @return ProductFlyweight
     */
    public function getFlyweight(Website $website): ProductFlyweight
    {
        $key = $this->getKey($website);

        if (!isset($this->productFlyweight[$key])) {
            echo "FlyweightFactory: Can't find a flyweight, creating new one.\n";
            $this->productFlyweight[$key] = new ProductFlyweight($website);
        } else {
            echo "FlyweightFactory: Reusing existing flyweight.\n";
        }

        return $this->productFlyweight[$key];
    }

    public function listFlyweights(): void
    {
        $count = count($this->productFlyweight);
        echo "\nFlyweightFactory: I have $count flyweights:\n";
        foreach ($this->productFlyweight as $key => $flyweight) {
            echo $key . "\n";
        }
    }
}
