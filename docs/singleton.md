# Présentation

Le pattern Singleton permet de s'assurer d'avoir une seule instance d'un objet pour partager code/données.
Il permet de donner un accés global à cet instance.

## Utilité

Il faut l'utiliser quand votre application doit avoir une seule instance pour tout les clients comme une BDD partagé dans les
différentes parties de votre programme.
Quand vous voulez un accée restreint sur vos variables globales.


## Notes 

A utiliser dans des cas extremement spécifiques.
Il casse le S de solide.Il peut cacher des problêmes de conception.
Difficile a utiliser sur des application multitread.
Difficilement testable à cause de la liaison fort entre composant/application.

#### Exemple :

````php
<?php

namespace Singleton;

class Singleton
{
    private static $instances = [];

    protected function __construct() { }

    protected function __clone() { }


    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    public static function getInstance(): Singleton
    {
        $cls = static::class;
        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new static;
        }

        return self::$instances[$cls];
    }

    public function someBusinessLogic()
    {
        // ...
    }
}
````