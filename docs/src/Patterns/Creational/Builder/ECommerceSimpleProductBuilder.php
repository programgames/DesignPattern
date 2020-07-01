<?php


namespace Builder;

class ECommerceSimpleProductBuilder implements SimpleProductBuilder
{
    /** @var SimpleProduct */
    private $product;

    /**
     * ECommerceSimpleProductBuilder constructor.
     */
    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->product = new SimpleProduct();
    }

    public function setName(string $name): void
    {
        $this->product->name = $name;
    }

    public function setPrice(string $price): void
    {
        $this->product->price = $price;
    }

    public function setDescription(string $description): void
    {
        $this->product->description = $description;
    }

    public function getProduct(): SimpleProduct
    {
        $result = $this->product;
        $this->reset();

        return $result;
    }
}
