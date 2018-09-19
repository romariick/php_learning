#A. Basic :
   1. Syntaxe de base
   2. Opérateur : binaire, arithmetic, concatenation, tableau, ternaire
   3. Utilisation de réference
   4. Constructeur de langage : die, exit, echo, require, require_once, include
   5. Namespaces
   6. Structure de controle : if, while, do while, for, foreach, switch
   7. extension : get_loaded_extensions(), phpinfo()
   8. Attention : modulo (signe - et +)

#B. DataFormat :
   1. XML de base
   2. SimpleXML
   3. DOM
   4. DateTime : timestamps(), strtotime, mktime()

# C. Pattern :
   1. Définition
   2. Motif 1
   3. Filtrage (Motif 2)
   4. Motif 3

# D. String :
   1. Recherche
   2. Nowdoc (Possible à interpoler les variables) et Heredoc non.
   3. strcmp(), strcasecmp(), strstr, crypt(), html_entities()
   4. strpos(), substr(), str_replace(), parse_url(), parse_str(), strtok

#E. POO :
   1. Instanciation
   2. Destructeur
   3. Constructeur
   4. Méthode magique : __set(), __get(), __call(), __sleep(), __wakeup()
   5. Intérface
   6. Class abstraite
   7. Static Hiting
   9. Différence entre self:: et static::
  11. Autoloading
  12. Variable constante __CLASS__, __NAMESPACES__, __LINE__
  13. SPL (Standard PHP librairie : ArrayIterator, ArrayObject
  14. Utilisation function list, each, next, current, rewind, reset()

#F. Config
   1. Configuration de base
     Dans le fichier de configuration php.ini :
     Mode production :
     - error_reporting = E_ALL & ~E_DEPRECATED & ~E_NOTICE
     - display_errors = off
     - errors_log = on
     - session.use_only_cookies = 1 // generate_id(true)
     - allow_url_open = off // Contre mesure code injection

   2. Extension :
    Pour avoir les listes des extensions en PHP utiliser la fonction :
    get_loaded_extensions() ; phpinfo()

#G. Web Features :
   1. HTTP Header : Authentification : WWW-Authentificate : Basic real= secret
   2. Status Code HTTP : 201, 204, 500, 401, 302
   3. REST vs SOAP :
   4. Verbes : POST, GET, DELETE, PUT, PATCH
   5. Variables globales : $_SERVER, $_GET, $_POST, $_GLOBAL

#H. SQL :
  1. SELECT
  2. JOIN
  3. DELETE
  4. UPDATE
  5. Opérateur d'agregation : sum, avg,

#I. Réflections

 1. Définition
 2. ReflectionClass, ReflectionXXX


#J. Security :
 1. Utiliser les fonctions suivant avant d'insérer dans la base de données :
  - htmlentities() : tranforme le <> => to &lt;&agt
  - html_special_chars : --- == ---
  - strip_tags : supprime les <>
 => Attention pour les options
  2. Filter les input et output.
  3. Utiliser les mots de passe hashé
  4. XSS

#K. Functions :
  1. Arguments : Gauche vers à droite ; func_get_args(), func_num_args();
  2. Return réference function &myFunction() ; doit réference le retour.
  3. Variable functions : $func = function($var) ; $fun('foo');
  4. Variables scopes : global $a ou $_GLOBAL['a']
  5. Function anonyme : $func = create_function('$x1, $x2', 'return $x1 * $x 2');

#L. Array Function :

  1. Déclaration array ; array(0, 1, 2) == [0, 1, 2, 3,]
  2. Use foreach($arrray as $value => $key) ou list($key, $value) = each($array)
  3. Function :
     - is_array($array) : check array
     - array_keys($array, $value_search) => is key exist
     - array_value($array) => extract value
     - count($array) same sizeof($array) ; count(abc) => 1

  4. Fonction usuelle :
     - array_diff($array1, $array2)
     - $array1 + $array2 : union
     - array_push($array1, $array2);
     - array_split($array);
     - array_exist

