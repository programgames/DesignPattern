# Présentation

Le pattern prototype est un design pattern de création.
Il permet de dupliquer des objets sans se confronter à des problèmes tels que :

1. L'accès des variables ( privé , protégé)
2. La connaissance de l'interface de l'objet a copié uniquement et donc impossibilité de copier.
3. La dépendance entre le code copieur et de la classe.

# Utilité

Il délègue la responsabilité du clonage à l'objet en lui-même.
Le pattern déclare une interface commune pour tous les objets qui supporte le clonage.

Utiliser ce pattern lorsque votre code ne doit pas être couplé avec la classe concrètes.
# Notes 

En php , ce pattern est présent out-of-the-box avec la méthode magique __clone().
Les primitives seront bien clonées, les components(objets) aussi et les références seront liées.

Il arrive que parfois nous ayons un objet A qui contient une référence à B et C et que B
lui aussi a une référence vers C comme ceci :
![Graph](src/Patterns/Creational/Prototype/A.png?raw=true "Title")


En utilisant __clone() sur A, le résulat sera :
En utilisant __clone() sur A, le résulat sera :

![Graph](src/Patterns/Creational/Prototype/B.png?raw=true "Title")

Pour éviter cela, on peut créer notre proprer classe qui vas dupliquer des entités par exemple avec la logique métier
ou d'utiliser quelque chose de plus générique tel que [DeepCopy](https://github.com/myclabs/DeepCopy)
qui va réaliser quelque chose de générique :

![Graph](src/Patterns/Creational/Prototype/C.png?raw=true "Title")

