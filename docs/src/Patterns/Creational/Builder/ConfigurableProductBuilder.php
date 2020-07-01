<?php


namespace Builder;

interface ConfigurableProductBuilder
{
    public function setName(string $name): void;

    public function setDescription(string $description): void;

    public function setVariants(...$variants): void;
}
