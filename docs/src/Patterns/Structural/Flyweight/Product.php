<?php

namespace Flyweight;

class Product
{
    /** @var string */
    private $name;

    /** @var Website */
    private $website;

    /**
     * Product constructor.
     * @param string $name
     * @param Website $website
     */
    public function __construct(string $name, Website $website)
    {
        $this->name = $name;
        $this->website = $website;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getWebsite()
    {
        return $this->website;
    }

    public function setWebsite(Website $website)
    {
        $this->website = $website;
    }
}
