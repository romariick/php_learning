1. Notes :

- string fgets($handle, int length) => récupère la ligne courante sur laquelle se trouve 
le pointeur du fichier.

- string fgetss($handle, int length, string allowedTags) => renvoie la ligne courante du fichier et 
HTML

- fgetc : lit un caractère dans un fichier

2. Mode d'écriture :

   r+ : lecture du fichier et place le pointeur du fichier au début de la ligne
   a+ : (R/W) place le pointeur du fichier à la fin de la ligne. S'il n'existe pas, on tente de le crée
   w+ : R/W : place le pointeur du fichier au début du fichier. Et réduit la taille 
de fichier à 0 octet. S'il n'existe pas il crée

3. Fonction utile : 
 handle fopen($addressFichier, $mode);
 string fread($handle, int length);
