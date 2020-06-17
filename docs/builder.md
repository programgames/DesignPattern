# Présentation

Le pattern builder est un design pattern de création.
Il permet de mettre de construire des objets complexes étape par étape.Il permet de créer différents types
et représentations de cet objet en utilisant le meme code de construction.

# Utilité

Se débarrasser de constructeurs avec beaucoup de paramètres ou bien de classes avec plein de constructeurs ( C++ )
À Utiliser lorsqu'on souhaite créer différentes représentations d'un produit ( Ex : Maison en bois, Maison en pierre ...)
ou des objets complexes ( arbres composite ... )

# Notes

Utiliser un directeur n'est pas forcément nécessaire, on peut appeler le builder étape par étape dans le code client.
L'avantage d'un directeur c'est qu'on va pouvoir le réutiliser de partout.

#### Interface du builder : 

```
{% include 'src/Patterns/Creational/Builder/ConfigurableProductBuilder.php' %}
```

#### Les 2 builders
 
```
{% include 'src/Patterns/Creational/Builder/ECommerceConfigurableProductBuilder.php' %}
```

 
```
{% include 'src/Patterns/Creational/Builder/ECommerceSimpleProductBuilder.php' %}
```

#### Les classes métiers : 


```
{% include 'src/Patterns/Creational/Builder/SimpleProduct.php' %}
```

```
{% include 'src/Patterns/Creational/Builder/ConfigurableProduct.php' %}
```

#### Les 2 directeurs : 

```
{% include 'src/Patterns/Creational/Builder/ConfigurableProductDirector.php' %}
```
```
{% include 'src/Patterns/Creational/Builder/SimpleProductDirector.php' %}
```

#### Le code métier :

```
{% include 'src/Patterns/Creational/Builder/clientCode.php' %}
```

#### Et le code qui vas tester tout ça :

```
{% include 'src/Patterns/Creational/Builder/index.php' %}
```

#### Output :

```
Minimal Simple Product for e-commerce
Name : OroCommerce sticker Description :  Price : 
Full Simple Product for e-commerce
Name : IPhone 11 Description : The cheapest smartphone Price : 0.99$
Another example to show that we can have another Director with another type of builder
Minimal Configurable Product for e-commerce
Name : Balloon Description : 
Full Configurable Product for e-commerceName : IPhone 11 Description : The cheapest smartphone
```
