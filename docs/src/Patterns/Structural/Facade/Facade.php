<?php

namespace Facade;

class Facade
{
    protected $categoryApi;

    protected $productApi;

    /**
     * Facade constructor.
     * @param $categoryApi
     * @param $productApi
     */
    public function __construct($categoryApi, $productApi)
    {
        $this->categoryApi = $categoryApi ?: new CategoryApi();
        $this->productApi = $productApi ?: new ProductApi();
    }

    public function getProductInfoById(int $id)
    {
        $info = 'Product Id : ' . $id . ' - ';

        $info .= 'Name : ' . $this->productApi->getProductNameById($id) . ' -  ';

        $info .= 'Price : ' . $this->productApi->getProductPriceByName(
            $this->productApi->getProductNameById($id)
        ) . ' -  ';

        $info .= 'Category : ' . $this->categoryApi->getCategoryByProductName(
            $this->productApi->getProductPriceByName(
                    $this->productApi->getProductNameById($id)
                )
        ) . PHP_EOL;


        return $info;
    }
}
