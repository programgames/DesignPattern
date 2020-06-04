<?php

namespace Decorator;

class BaseCustomerDecorator implements IBuyer
{
    /** @var IBuyer */
    private $decorated;

    /** @var array */
    private $historic = [];

    /**
     * BaseCustomerDecorator constructor.
     * @param $decorated
     */
    public function __construct(IBuyer $decorated)
    {
        $this->decorated = $decorated;
    }

    public function buy(Product $product)
    {
        $this->historic[] = $product;
        $this->decorated->buy($product);

        $this->showHistoric();
    }

    public function showHistoric()
    {
        echo "Historic : " . PHP_EOL;
        foreach ($this->historic as $product) {
            echo "Product : " . $product->getName() . " - Price : " . $product->getPrice() . " $" . PHP_EOL;
        }
    }
}