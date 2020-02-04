# Présentation

Le pattern factory est un pattern de création.
Il permet de mettre en place une interface permettant de créer des objets dans une 'super-classe'.
Mais permet au sous-classes de changer le type d'objet créée, ces sous classes sont appellé les 'Creators' tandis 
que la super classe, la factory.

# Utilité

Création d'objet dont on ne 'sait pas' le type dans le futur mais uniquement le type de comportement (l'interface).
Example on veut une nouvelle connection de base de donnée avec une query string.
Le pattern peut nous permettre de renvoyer un objet de type DBMySql ou DBOracle selon la query string.

Il permet de séparer le création de l'utilisation d'un objet, de plus il permet d'etendre facilement les objets utilisé 
simplement en créant de nouveaux 'createur d'objet' héritant d'une classe de base.

Les 'creators' peuvent trés bien intégré de la logique métier.

Les createurs ne sont pas forcé de reélement créer l'objet , il peut aller les chercher depuis une bdd, le cache ...

