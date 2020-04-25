# Présentation

- Le pattern factory est un design pattern de création.
- Il permet de mettre en place une interface permettant de créer des objets dans une "super-classe".
- Mais permet aux sous-classes de changer le type d'objet créé, ces sous-classes sont les **Créateurs** tandis
que la super classe, la **factory**.

# Utilité

- Création d'objet dont on ne sait pas précisément le type dans le futur mais uniquement le type de comportement (l'interface).
Exemple : on veut une nouvelle connexion de base de données avec une query string.
Le pattern peut nous permettre de renvoyer un objet du type DBMySql ou DBOracle selon la query string.

- Il permet de séparer la création de l'utilisation d'un objet, de plus il permet d'étendre facilement les objets utilisés
simplement en créant de nouveaux "créateurs d'objets" héritant d'une classe de base.

- Les **créateurs** peuvent très bien intégrer la logique métier.La fonction du **créateur** n'est pas seulement de créer un objet.
Il n'est pas forcé de réellement créer l'objet .
Il peut aller les chercher depuis une bdd, le cache ... pour économiser des ressources aussi.

- Permettre aux utilisateurs de la librairie, d'étendre ses composants internes.

## Exemple :

Ici 2 factory sont présentés pour comprendre l'intérêt.

#### La classe abstraite de la factory
```
{% include 'src/Patterns/Creational/Factory/ProductFactory.php' %}
``` 

#### Les 2 factory
```
{% include 'src/Patterns/Creational/Factory/ConfigurableProductFactory.php' %}
``` 

```
{% include 'src/Patterns/Creational/Factory/SimpleProductFactory.php' %}
``` 

#### L'interface métier

```
{% include 'src/Patterns/Creational/Factory/ProductInterface.php' %}
```


#### Les classes métiers
```
{% include 'src/Patterns/Creational/Factory/ConfigurableProduct.php' %}
```

```
{% include 'src/Patterns/Creational/Factory/SimpleProduct.php' %}
``` 

#### Le code client censé fonctionner avec n'importe quel ProductFactory

```
{% include 'src/Patterns/Creational/Factory/clientCode.php' %}
```

#### Et le code qui vas tester tout ça :

```
{% include 'src/Patterns/Creational/Factory/index.php' %}
```

#### Output :

````
App: Launched with the ConfigurableProductFactory.
Client: I'm not aware of the factory's concrete class, but it still works.
PRODUCT CONFIGURABLEApp: Launched with the SimpleProductFactory.
Client: I'm not aware of the factory's concrete class, but it still works.
SIMPLE PRODUCT
````
