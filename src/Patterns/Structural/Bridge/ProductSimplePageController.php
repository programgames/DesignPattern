<?php

namespace Bridge;

class ProductSimplePageController extends PageController
{
    /** @var Product */
    private $product;

    /**
     * ProductPageController constructor.
     * @param Product $product
     * @param ProductRenderer $pageRenderer
     */
    public function __construct(Product $product, ProductRenderer $pageRenderer)
    {
        parent::__construct($pageRenderer);
        $this->product = $product;
    }

    public function getView(): string
    {
        return $this->pageRenderer->renderProduct($this->product);
    }
}
