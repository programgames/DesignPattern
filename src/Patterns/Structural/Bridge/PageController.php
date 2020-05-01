<?php

namespace Bridge;

abstract class PageController
{

    /** @var ProductRenderer */
    protected $pageRenderer;

    /**
     * PageController constructor.
     * @param ProductRenderer $pageRenderer
     */
    public function __construct(ProductRenderer $pageRenderer)
    {
        $this->pageRenderer = $pageRenderer;
    }

    public function changeRenderer(ProductRenderer $renderer)
    {
        $this->pageRenderer = $renderer;
    }

    abstract public function  getView(): string;
}