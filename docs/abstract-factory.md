# Présentation

Le pattern abstract factory est un pattern de création.
Il permet de mettre en place une interface permettant de créer des familles d'objets dans une 'super-classe'.
Mais permet au sous-classes de changer la famille d'objets créée, ces sous-classes sont appellé les 'Creators' tandis
que la super classe, la factory.

# Utilité

Création de famille d'objets dans une classe parente.

Example on veut crééer une fenêtre d'application qui change selon si on est sur windows ou sur mac.
On vas avoir une interface 'GuiFactory' implementé par la WinGuifactory ou la MacguiFactory qui elles vont créer des boutons, checkbox.
Les boutons de Mac Ou windows reste des Button ( interface )

Il permet de déléguer et de pouvoir ajouter des fonctionnement indéfinis de comportement par famille.

Cela permet de réduire drastiquement le lien entre le code client et la classe concrete.
Il permet d'ajouter des familles d'objets sans casser le code client.

C'est une évolution du pattern factory pour obtenir plus de souplesse quand à la création d'objets.