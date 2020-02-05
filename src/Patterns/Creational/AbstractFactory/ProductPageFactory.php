<?php


namespace AbstractFactory;


interface ProductPageFactory
{
    public function createProduct() : Product;
    public function createPrice(): Price;
}