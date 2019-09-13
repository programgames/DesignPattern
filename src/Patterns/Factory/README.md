Le pattern factory est un pattern de création.
Il permet de mettre en place une interface permettant de créer des objets dans une 'super-classe'.
Mais permet au sous-classes de changer le type d'objet créée.

Use the Factory Method when you don’t know beforehand the exact types and dependencies of the objects your code should work with.

The Factory Method separates product construction code from the code that actually uses the product. Therefore it’s easier to extend the product construction code independently from the rest of the code.

For example, to add a new product type to the app, you’ll only need to create a new creator subclass and override the factory method in it.

Use the Factory Method when you want to provide users of your library or framework with a way to extend its internal components.