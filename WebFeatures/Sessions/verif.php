<?php
session_start();

if(isset($_POST['pseudo']) && isset($_POST['motdepasse'])){
    
    $pseudo = strip_tags($_POST['pseudo']);
    $motdepasse = strip_tags($_POST['motdepasse']);
    echo 'Pseudo :'.$pseudo;
    if(verification($pseudo, $motdepasse)){
        session_regenerate_id();
        $_SESSION['pseudo'] = $pseudo;        
    }
}

function verification($login, $motdepasse){
    return true;
}