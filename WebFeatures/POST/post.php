
<?php
  print_r($_REQUEST);
  print_r($_FILES);
  
  print_r(headers_list());
  var_dump(headers_sent());
  setcookie('Romaric', 'KKkkk', 0, 'www.google.com', null, false);
  
  // si on ne donne pas de value php attribut directement value par
  // la valeur à  l'intérieur exemple PHP en bas
?>

<html>
    
    <form method="POST" action="post.php" enctype="multipart/form-data">
        <input type="text" name="nom.qt">
        <input type="checkbox" name="qcm" value="oui">
       
       <select name="id[]">
           <option >PHP</option> 
           <option value="value2">C++</option>
           
       </select>
        <input type="file">
        <input type="submit" value='Soummettre'>
    </form>
</html>
