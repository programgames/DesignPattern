# Présentation

Le pattern composite est un design pattern structurel.
Il permet de découper des objets en en forme **d'abre**.
Cela permet d"utiliser ces objets (les feuilles) individuellement.

# Utilité

Ce pattern est applicable uniquement si le model peut être présenté en forme d'abre.

Par exemple un dossier ou un composant graphique.

Un dossier peut en contenir un autre comme pour le composant graphique ( fenêtre -> tab -> bouton )

## Exemple :

##### La classe composite de base :

Elle contient les fonctions de base du composite mais
elle peut définir des fonctions abstraites devant être implémenter dans les classes concretes. 

```
{% include 'src/Patterns/Structural/Composite/LayoutComponent.php' %}
```

#### Une feuille du pattern composite :

```
{% include 'src/Patterns/Structural/Composite/LayoutObject.php' %}
```

#### Une branche du pattern composite :

```
{% include 'src/Patterns/Structural/Composite/LayoutObject.php' %}
```

#### Le code client :

Il peut afficher n'importe quel branche/feuilles

```
{% include 'src/Patterns/Structural/Composite/clientCode.php' %}
```

#### Le code test :

```
{% include 'src/Patterns/Structural/Composite/index.php' %}
```

#### Output :

```
Displaying one leaf : 
<p>I'm another leaf</p>
Displaying the tree : 
<html>
<body>
<div>
<p>I'm a leaf</p>
<p>I'm another leaf</p>
</div>
</body>
</html>
``` 