<?php

// http://localhost:8777/SQLInjection.php?login=toto

$conn = mysqli_connect('localhost', 'root', 'rootp', 'test');

try {

    // SQLInjection first step :  $sql = "SELECT * FROM users WHERE firstname = '' OR '1' = '1'";
    // // Cette requete fonctionne et permet de retourner n’importe quelle utilisateur
    //' OR 1 = 1 LIMIT 1, 1 --   => SELECT * FROM users WHERE firstname = ' ' OR 1 = 1 LIMIT 1, 1 -- '  => 1er utilisateur
    //' OR 1 = 1 LIMIT 2, 1 --   => SELECT * FROM users WHERE firstname = ' ' OR 1 = 1 LIMIT 2, 1 -- '  => 2eme utilisateur
    // ' OR address IS NULL --    => SELECT * FROM users WHER firstname = ' ' OR address IS NULL -- '
    $sql = "select * from users  where firstname = '".$_GET['login']."'";
    $result = mysqli_query($conn, $sql);

    var_dump($result);
    die;
} catch (Exception $ex) {
    echo('Erreur : ' . $ex->getMessage());
}
