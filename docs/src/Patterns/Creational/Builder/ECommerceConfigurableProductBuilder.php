<?php


namespace Builder;

class ECommerceConfigurableProductBuilder implements ConfigurableProductBuilder
{
    /**
     * @var ConfigurableProduct
     */
    private $product;

    /**
     * ECommerceConfigurableProductBuilder constructor.
     */
    public function __construct()
    {
        $this->reset();
    }


    public function setName(string $name): void
    {
        $this->product->name = $name;
    }

    public function setDescription(string $description): void
    {
        $this->product->description = $description;
    }

    public function setVariants(...$variants): void
    {
        foreach ($variants as $variant) {
            $this->product->variants[] = $variant;
        }
    }

    public function getProduct(): ConfigurableProduct
    {
        $result = $this->product;
        $this->reset();

        return $result;
    }

    public function reset(): void
    {
        $this->product = new ConfigurableProduct();
    }
}
