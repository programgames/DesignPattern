<?php

namespace Bridge;

interface ProductRenderer
{
    public function renderProduct(Product $product);

    public function renderProductWithPrice(Product $product);
}
