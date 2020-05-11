<?php

namespace Composite;

class LayoutContainer extends LayoutComponent
{
    /**
     * LayoutContainer constructor.
     * @param string $startHtml
     * @param string $endHtml
     */
    public function __construct(string $startHtml, string $endHtml)
    {
        $this->children = new \SplObjectStorage;
        $this->startHtml = $startHtml;
        $this->endHtml = $endHtml;
    }

    /**
     * @var \SplObjectStorage
     */
    protected $children;

    /**
     * @var string
     */
    protected $startHtml;

    /**
     * @var string
     */
    protected $endHtml;


    public function getChildren()
    {
        return $this->children;
    }

    public function setChildren(\SplObjectStorage $children)
    {
        $this->children = $children;
    }

    public function getStartHtml()
    {
        return $this->startHtml;
    }

    public function setStartHtml(string $startHtml)
    {
        $this->startHtml = $startHtml;
    }

    public function getEndHtml()
    {
        return $this->endHtml;
    }

    public function setEndHtml(string $endHtml)
    {
        $this->endHtml = $endHtml;
    }

    /**
     * @param LayoutComponent $component
     */
    public function add(LayoutComponent $component): void
    {
        $this->children->attach($component);
        $component->setParent($this);
    }

    public function remove(LayoutComponent $component): void
    {
        $this->children->detach($component);
        $component->setParent(null);
    }

    public function isComposite(): bool
    {
        return true;
    }

    /**
     * Le composite vas exécuter une action sur ces enfant suivant un ordre logique
     */
    public function display()
    {
        echo $this->getStartHtml() . PHP_EOL;
        foreach ($this->children as $child) {
            $results[] = $child->display();
        }
        echo $this->getEndHtml() . PHP_EOL;
    }
}