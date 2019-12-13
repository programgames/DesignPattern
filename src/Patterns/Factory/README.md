# Présentation

Le pattern factory est un pattern de création.
Il permet de mettre en place une interface permettant de créer des objets dans une 'super-classe'.
Mais permet au sous-classes de changer le type d'objet créée.

# Utilité

Création d'objet dont on ne sait pas le type mais uniquement l'interface 
Example on veut une nouvelle connection de base de donnée avec une query string.
Le pattern peut nous permettre de renvoyer un objet de type DBMySql ou DBOracle selon la query string.

Example : 

```

```

