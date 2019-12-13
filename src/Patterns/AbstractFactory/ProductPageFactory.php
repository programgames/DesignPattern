<?php


namespace Patterns\AbstractFactory;


interface ProductPageFactory
{
    public function createProduct() : Product;
    public function createPrice(): Price;
}