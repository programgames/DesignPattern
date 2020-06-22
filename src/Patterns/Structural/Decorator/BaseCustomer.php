<?php

namespace Decorator;

class BaseCustomer implements IBuyer
{
    private $money = 500;

    public function buy(Product $product)
    {
        echo "Buying " . $product->getName() . PHP_EOL;
        $this->money -= $product->getPrice();
    }

    public function getMoney()
    {
        return $this->money;
    }

    public function setMoney(int $money)
    {
        $this->money = $money;
    }

    public function displayMoney(int $money)
    {
        echo "I have " . $money . " $";
    }
}
