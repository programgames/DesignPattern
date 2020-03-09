# Présentation

Le pattern prototype est un design pattern de création.
Il permet de dupliquer des objets sans se confronter a des problèmes tel que :
- l'accées des variables ( privé , protégé)
- La connaissance de l'interface de l'objet a copier uniquement et donc impossibilité de copier.
- La dépendance entre le code copieur et de la classe

# Utilité

Il délégue la responsabilité du clonage à l'objet en lui même.
Le pattern déclare une interface commune pour tout les objets qui supporte le clonage.

Utiliser ce pattern lorsque votre code ne doit pas être couplé avec le classe concretes.
# Notes 

En php , ce pattern est present out-of-the-box avec la méthode magique __clone().
Les primitives seront bien clonées, les components(objets) aussi et les références seront liées.

Il arrive que parfois nous ayons un objet A qui contient une référence a B et C et que B lui aussi a une référence vers C comme ceci :
![Graph](A.png?raw=true "Title")


En utilisant __clone() sur A, le résulat sera :

![Graph](B.png?raw=true "Title")

Pour éviter cela, on peut créer notre proprer classe qui vas dupliquer des entitées par example avec de la logique métier ou d'utiliser 
quelque chose de plus générique tel que  DeepCopy: https://github.com/myclabs/DeepCopy

qui vas réaliser quelque chose de générique :

![Graph](C.png?raw=true "Title")

