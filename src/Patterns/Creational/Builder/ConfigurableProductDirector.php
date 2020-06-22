<?php


namespace Builder;

class ConfigurableProductDirector
{
    /**
     * @var ConfigurableProductBuilder
     */
    private $builder;

    public function setBuilder(ConfigurableProductBuilder $builder): void
    {
        $this->builder = $builder;
    }

    public function buildMinimalConfigurableProduct(string $name): void
    {
        $this->builder->setName($name);
    }

    public function buildFullConfigurableProduct(string $name, string $description, ...$variants): void
    {
        $this->builder->setName($name);

        $this->builder->setDescription($description);

        $this->builder->setVariants($variants);
    }
}
