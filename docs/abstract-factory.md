# Présentation

Le pattern abstract factory est un pattern de création.
Il permet de mettre en place une interface permettant de créer des familles d'objets dans une **super-classe**.
Mais permet aux sous-classes de changer la famille d'objets créés, ces sous-classes sont appelés les **Creators** tandis
que la super classe, la **Factory**.

## Utilité

Création de famille d'objets dans une classe parente.

Exemple on veut créer une fenêtre d'application qui change selon si on est sur windows ou sur mac.
On vas avoir une interface **GuiFactory** implementé par la **WinGuifactory** ou la **MacguiFactory** qui elles vont créer des boutons, checkbox.
Les boutons de Mac Ou Windows reste des Button ( interface )

Il permet de déléguer et de pouvoir ajouter des fonctionnements indéfinis de comportement par famille.

Cela permet de réduire drastiquement le lien entre le code client et la classe concrète.
Il permet d'ajouter des familles d'objets sans casser le code client.

C'est une évolution du pattern factory pour obtenir plus de souplesse quant à la création d'objets.

## Exemple :
Ici est présenté 2 factory héritant de la meme interface

#### L'interface de la factory
```
{% include 'src/Patterns/Creational/AbstractFactory/ProductFactory.php' %}
``` 

#### Les 2 factory

```
{% include 'src/Patterns/Creational/AbstractFactory/B2BProductFactory.php' %}
```

```
{% include 'src/Patterns/Creational/AbstractFactory/B2CProductFactory.php' %}
```

#### Les interface métiers

```
{% include 'src/Patterns/Creational/AbstractFactory/Product.php' %}
```


```
{% include 'src/Patterns/Creational/AbstractFactory/Price.php' %}
```

#### Les objets métier

```
{% include 'src/Patterns/Creational/AbstractFactory/B2BPrice.php' %}
```

```
{% include 'src/Patterns/Creational/AbstractFactory/B2BProduct.php' %}
```

```
{% include 'src/Patterns/Creational/AbstractFactory/B2CPrice.php' %}
```

```
{% include 'src/Patterns/Creational/AbstractFactory/B2CProduct.php' %}
```

#### Le code client censé fonctionner avec n'importe quel ProductFactory

```
{% include 'src/Patterns/Creational/AbstractFactory/clientCode.php' %}
```

#### Et le code qui vas tester tout ça :

```
{% include 'src/Patterns/Creational/AbstractFactory/index.php' %}
```

#### Output :

````
Client: Testing client code with the first factory type:
TYPE :B2B PRODUCT
PRIX :20000 $
Client: Testing the same client code with the second factory type:
TYPE :B2C PRODUCT
PRIX :20 $
````