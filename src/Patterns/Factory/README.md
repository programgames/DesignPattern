# Présentation

Le pattern factory est un design pattern de création.
Il permet de mettre en place une interface permettant de créer des objets dans une "super-classe".
Mais permet aux sous-classes de changer le type d'objet créé, ces sous-classes sont les "Créateurs" tandis
que la super classe, la factory.

# Utilité

Création d'objet dont on ne sait pas précisément le type dans le futur mais uniquement le type de comportement (l'interface).
Example : on veut une nouvelle connexion de base de données avec une query string.
Le pattern peut nous permettre de renvoyer un objet du type DBMySql ou DBOracle selon la query string.

Il permet de séparer la création de l'utilisation d'un objet, de plus il permet d'étendre facilement les objets utilisés
simplement en créant de nouveaux "créateurs d'objets" héritant d'une classe de base.

Les 'créateurs' peuvent très bien intégré de la logique métier.

Les createurs ne sont pas forcé de reélement créer l'objet , il peut aller les chercher depuis une bdd, le cache ...

