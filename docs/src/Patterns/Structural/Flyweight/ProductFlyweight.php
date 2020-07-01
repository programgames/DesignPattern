<?php

namespace Flyweight;

/**
 * Le poids-mouche stocke une portion commune de l'état ( appelé intrinsèque )
 * qui appartient a plusieurs objets métier. le poids-mouche accepte le reste de l'état ( extrinsèque )
 * unique à chaque entité dans les méthodes autre que le constructeur.
 */
class ProductFlyweight
{
    /**
     * Etat intrinsèque
     * @var Website
     */
    private $website;

    /**
     * Flyweight constructor.
     * @param Website $website
     */
    public function __construct(Website $website)
    {
        $this->website = $website;
    }

    public function affichageInfo($name): void
    {
        echo strtr(
            "Unique state : %name% - intrinsic state : %intrinsic% ",
            [
                '%name%' => $name,
                '%intrinsic%' => $this->website->getName()
            ]
        );
    }
}
