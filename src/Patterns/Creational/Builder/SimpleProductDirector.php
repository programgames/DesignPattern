<?php


namespace Builder;


class SimpleProductDirector
{
    /**
     * @var SimpleProductBuilder
     */
    private $builder;

    public function setBuilder(SimpleProductBuilder $builder): void
    {
        $this->builder = $builder;
    }

    public function buildMinimalSimpleProduct(string $name): void
    {
        $this->builder->setName($name);
    }

    public function buildFullSimpleProduct(string $name,string $description,string $price): void
    {
        $this->builder->setName($name);
        $this->builder->setPrice($price);
        $this->builder->setDescription($description);
    }
}