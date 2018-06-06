<?php

include_once("BDD.php");
require "encryption_config.php";
require "encryption.php";
include_once("mail.php");

$object = new Bdd;
$object->connect();

function modifmdp($newpassw,$mail){
    $object = new Bdd;
    $requete = $object->connect()->prepare('UPDATE utilisateur SET password=:newpassw WHERE mail=:mail ');
    $requete->execute(array("newpassw"=>Encryption::encrypt($newpassw),
        "mail"=>$mail));
    echo "Mot de passe modifié, l'utilisateur avec le mail " .$mail. " a maintenant le mdp : " . $newpassw ;
}

?>