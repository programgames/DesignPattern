<?php

namespace Composite;

abstract class LayoutComponent
{
    /*
     * @var LayoutComponent
     */
    protected $parent;

    public function getParent()
    {
        return $this->parent;
    }

    public function setParent($parent)
    {
        $this->parent = $parent;
    }

    public function add(LayoutComponent $component): void
    {
    }

    public function remove(LayoutComponent $component): void
    {
    }

    /**
     * Méthode supplémentaire pour savoir si un composant peut avoir des enfants ( branche )
     */
    public function isComposite(): bool
    {
        return false;
    }

    /**
     * Fonction devant être implémenté dans les classes concretes.
     */
    abstract public function display();
}
