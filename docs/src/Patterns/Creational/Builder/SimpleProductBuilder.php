<?php


namespace Builder;


interface SimpleProductBuilder
{
    public function setName(string $name): void;

    public function setPrice(string $name): void;

    public function setDescription(string $description): void;

}