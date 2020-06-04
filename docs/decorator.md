# Présentation

Le Design pattern Décorateur vous permet d'attacher de nouveaux comportements aux objets en plaçant ces objets
dans des objets wrapper qui respectent leurs contrats (interface).

# Utilité

Evite de créer des sous classes dans tout les sens pour ajouter des comportements spécifiques.
Il est possible de réutiliser les décorateurs entre eux.
Il permet d'ajouter des reponsabilités aux classes à l'éxécution sans toucher aux classes original.
Permet bien sur d'ajouter des comportements aux classes final etant donné que la classe original n'est pas modifié mais juste décoré.

# Exemple :

#### L'interface de la classe concrete :

```
{% include 'src/Patterns/Structural/Decorator/IBuyer.php' %}
``` 

#### Une classe concrete

```
{% include 'src/Patterns/Structural/Decorator/BaseCustomer.php' %}
```

#### Une classe métier

```
{% include 'src/Patterns/Structural/Decorator/Product.php' %}
```

#### Un décorateur de la classe concrete

```
{% include 'src/Patterns/Structural/Decorator/BaseCustomerDecorator.php' %}
```

#### Le code client compatible avec des objets implémentant IBuyer

```
{% include 'src/Patterns/Structural/Decorator/clientCode.php' %}
```

#### Le code test

```
{% include 'src/Patterns/Structural/Decorator/index.php' %}
```

#### Output 

```The client code is supporting the BaseCustomerObject
   Buying Iphone
   
   
   But it can support a decorated Customer aswell
   Buying Iphone
   Historic : 
   Product : Iphone - Price : 999 $
```