# Présentation

Le Design pattern Facade met à disposition une interface simplifiée d'une librairie/framework/ensemble complexe de classe.

# Utilité

Il permet de séparer la logique métier avec l'utilisation du framework pour éviter un couplage inutile et difficilement
maintenable.

La facade est très pratique lorsque votre application utilise une librairie avec énormément de fonctionnalités.
Elle vas vous permettre d'afficher que les fonctionnalités dont vous avez besoin.
La facade permet de structurer des sous système en couches.

# Exemple :


#### 2 classe 'API'

```
{% include 'src/Patterns/Structural/Facade/CategoryApi.php' %}
``` 

```
{% include 'src/Patterns/Structural/Facade/ProductApi.php' %}
``` 

#### La facade

```
{% include 'src/Patterns/Structural/Facade/Facade.php' %}
```

#### Le code client

```
{% include 'src/Patterns/Structural/Facade/clientCode.php' %}
```

#### Le code test

```
{% include 'src/Patterns/Structural/Facade/index.php' %}
```

#### Output:

```
Product Id : 1 - Name : My product -  Price : 9.99 -  Category : Food
```  