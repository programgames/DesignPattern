# Présentation

Le pattern Adapter permet aux objets avec des interfaces différentes de communiquer.

# Utilité

A utiliser quand vous voulez utiliser une classe , mais que celle ci n'est pas compatible avec le reste du code.
Cette classe vas permetre d'avoir le role du traducteur.

Utiliser un adapteur pour permettre de rajouter des fonctionnalitées à une classe, dans ce cas la , l'adapteur seras
en quelque sorte un 'décorateur' amélioré.


## Exemple :

#### L'interface de classe a adapter
```
{% include 'src/Patterns/Structural/Adapter/ClientInterface.php' %}
``` 

#### La classe à adapter
```
{% include 'src/Patterns/Structural/Adapter/JsonClient.php' %}
``` 

#### La classe incompatible
```
{% include 'src/Patterns/Structural/Adapter/SerializedClient.php' %}
``` 

#### L'adapter
```
{% include 'src/Patterns/Structural/Adapter/SerializedToJsonAdapter.php' %}
```

#### Le code client
```
{% include 'src/Patterns/Structural/Adapter/clientCode.php' %}
``` 

#### La classe test
```
{% include 'src/Patterns/Structural/Adapter/index.php' %}
```

#### Output

```
Client code is designed correctly and works with json:
SENDING DATA : Hello world

The same client code can work with other classes via adapter:
DATA SEND : Hello world
```
