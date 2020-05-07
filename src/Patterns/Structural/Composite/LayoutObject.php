<?php

namespace Composite;

class LayoutObject extends LayoutComponent
{
    /**
     * LayoutObject constructor.
     * @param $html
     */
    public function __construct($html)
    {
        $this->html = $html;
    }

    private $html;

    public function getHtml()
    {
        return $this->html;
    }

    public function setHtml($html)
    {
        $this->html = $html;
    }

    /**
     * @inheritDoc
     */
    public function display()
    {
        echo $this->html . PHP_EOL;
    }
}