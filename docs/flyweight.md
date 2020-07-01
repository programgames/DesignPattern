# Présentation

Le pattern Flyweight est un design pattern structurel.
Ce design pattern permet de rentrer plus d'objets dans un espace de RAM en 
partagant les parties communes des objets au lieu de les stocké dans chaque objet.

# Utilité

Ce pattern n'a que pour seule réelle utilité de rendre un programme moins gourmand en termes de
mémoire. Il est donc à utiliser seulement si votre programme est trop gourmand et que beaucoup d'objets sont utilisé
avec des propriétés avec des valeurs communes entre tout ces objets.

# Exemple

On vas montrer dans cet exemple les 2 cas suivants:

- stockage de produits brut avec une classe website

- stockage de produits poid-mouche

## Exemple sans poid-mouche :

### Classes métier Product et Website :

```
{% include 'src/Patterns/Structural/Flyweight/Product.php' %}
``` 

```
{% include 'src/Patterns/Structural/Flyweight/Website.php' %}
```

### Le poid-mouche et la factory :

```
{% include 'src/Patterns/Structural/Flyweight/ProductFlyweight.php' %}
```

```
{% include 'src/Patterns/Structural/Flyweight/ProductFlyWeightFactory.php' %}
```

### Le code client utilisé dans les 2 exemples 

```
{% include 'src/Patterns/Structural/Flyweight/clientCode.php' %}
```

### Le fichier test sans poid-mouche : 

```
{% include 'src/Patterns/Structural/Flyweight/index_no_pattern.php' %}
```

### Output sans poid-mouche : 

```
Memory in use: 309.32447814941MB
```

300 MB de mémoire utilisé;

### Le fichier test  avec poid-mouche:

```
{% include 'src/Patterns/Structural/Flyweight/index.php' %}
```

### Output avec flyweight : 

```
Unique state : 7pAGzhlrbs - intrinsic state : DISCOUNTSHOP 
Client: Adding a car to database.
FlyweightFactory: Reusing existing flyweight.
Unique state : 7pAGzhlrbs - intrinsic state : SHOPOFDEAL 
FlyweightFactory: I have 2 flyweights:
DISCOUNTSHOP
SHOPOFDEAL
Memory in use: 64.461486816406MB
```

Mémoire utilisé 64 MB
