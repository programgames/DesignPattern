# Présentation

Le pattern builder est un design pattern de création.
Il permet de mettre de construire des objets complexes étape par étape.Il permet de créer différents types et représentations de cette objet
en utilisant le meme code de construction.

# Utilité

Se débarrasser de contructeurs avec beaucoup de parametres ou bien de classes avec plein de constructeurs ( C++ )

A Utiliser lorsqu'on souhaite créer différentes représentation d'un produit ( Ex : Maison en bois, Maison en pierre ...) ou des objets complexes ( arbres composite ... )

# Notes 
Utiliser un directeur n'est pas forcément nécéssaire, on peut appelé le builder étape par étape par étape dans le code client.
L'avantage d'un directeur c'est qu'on vas pouvoir le réutiliser de partout.