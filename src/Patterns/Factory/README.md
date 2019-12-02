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
class DBFactory {
    public static function create ($connectionString){
       if (($driverEndPos = strpos ($connectionString, ':')) === false){
          throw new Exception ('Mauvaise chaine de connexion');
       }
 
       switch (substr ($connectionString, 0, $driverEndPos)){
          case 'mysql':
             $db = new DBMySql ($connectionString1);
             break;
          case 'oracle':
             $db = new DBOracle ($connectionString1);
             break;
          default:
             throw new Exception ('Type de base inconnu');
       }
       return $db;
    }
 }
```

