# Présentation

Le pattern Flyweight est un design pattern structurel.
Ce design pattern permet de rentrer plus d'objets dans un espace de RAM en 
partagant les parties communes des objets au lieu de les stocké dans chaque objet.

# Utilité

Ce pattern n'a que pour seule réelle utilité de rendre un programme moins gourmand en termes de
mémoire. Il est donc à utiliser seulement si votre programme est trop gourmand et que beaucoup d'objets sont utilisé
avec des propriétés avec des valeurs communes entre tout ces objets.

