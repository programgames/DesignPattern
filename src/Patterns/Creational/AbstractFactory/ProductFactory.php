<?php


namespace AbstractFactory;


interface ProductFactory
{
    public function createProduct() : Product;
    public function createPrice(): Price;
}