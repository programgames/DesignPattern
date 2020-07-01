<?php

namespace Bridge;

class ProductFullPageController extends PageController
{
    private $product;

    /**
     * ProductFullPageController constructor.
     * @param Product $product
     * @param ProductRenderer $productRenderer
     */
    public function __construct(Product $product, ProductRenderer $productRenderer)
    {
        parent::__construct($productRenderer);
        $this->product = $product;
    }

    public function getView(): string
    {
        return $this->pageRenderer->renderProductWithPrice($this->product);
    }
}
