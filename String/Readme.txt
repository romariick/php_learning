Les syntaxes de base de PCRE ou (Perl Compatible Regular Expression)

1. Il faut commencer toujours avec un délimiteur : // ou ##
2. [0- 9] ou \d => comprise entre 0 à 9
3. [a-z] ou \w => entre a à z
4. Chercher dans une chaine 
  - /toto/ => preg_match('/toto/', 'This is toto') => true
5. Syntaxe : 

  - Toto => Contient la chaîne Toto
  - ^Toto => Commence par Toto
  - Toto$ => se termine par Toto
  - ^Toto$ => exactement Toto
6. Filtrage :
  [^..] => Tous sauf
  (tot|tat)a => tota ou tata
  [ABC] => A|B|C
  

