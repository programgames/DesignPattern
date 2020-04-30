# Présentation

Le pattern bridge est un design pattern structurel.
Il permet de découper une classe ou un ensemble de classe en deux hiérarchie.

1. Une abstraction
2. Une implémentation

# Utilité

Découper une classe monolitic qui a beaucoup de fonctionnalitées.
Permettre d'étendre une classe en différentes classes avec leurs spécificités.
Permettre de change l'implementation à l'éxécution ( à ne pas confondre avec le pattern Strategy).

## Exemple :

##### La classe métier :
```
{% include 'src/Patterns/Structural/Bridge/Product.php' %}
```

#### L'interface de l'implémentation 

```
{% include 'src/Patterns/Structural/Bridge/ProductRenderer.php' %}
```

#### Les 2 implémentations

```
{% include 'src/Patterns/Structural/Bridge/HtmlProductRenderer.php' %}
```

```
{% include 'src/Patterns/Structural/Bridge/RawProductRenderer.php' %}
```
#### La base ( classe abstraite) de l'abstraction

```
{% include 'src/Patterns/Structural/Bridge/PageController.php' %}
```

#### Les 2 abstractions

```
{% include 'src/Patterns/Structural/Bridge/ProductSimplePageController.php' %}
```

```
{% include 'src/Patterns/Structural/Bridge/ProductFullPageController.php' %}
```

#### Les code client

```
{% include 'src/Patterns/Structural/Bridge/clientCode.php' %}
```

#### Le code test qui fonctionne avec n'importe quel PageController

```
{% include 'src/Patterns/Structural/Bridge/index.php' %}
```

#### Output 

````php
Raw product display :
Product name : watermelon

Html product rendered with the same client code:
<p><strong> Product name :</strong> watermelon</p>

We can use another controller with the same interface:
Product name : watermelon / Product price : 9.99
````