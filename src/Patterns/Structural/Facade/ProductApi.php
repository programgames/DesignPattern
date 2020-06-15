<?php

namespace Facade;

/**
 * We will not show a real api implementation ofc :)
 */
class ProductApi
{
    public function getProductNameById(int $id)
    {
        return 'My product';
    }

    public function getProductPriceByName(string $name)
    {
        return 9.99;
    }
}