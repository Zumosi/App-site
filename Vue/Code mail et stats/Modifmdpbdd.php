<?php

include_once("BDD.php");
require "encryption_config.php";
require "encryption.php";
include_once("mail.php");

$object = new Bdd;
$object->connect();
$mail="A@A";
$newpassw= genererChaineAleatoire($longueur, $listeCar = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');

function modifmdp($newpassw,$mail){
    $object = new Bdd;
    $requete = $object->connect()->prepare('UPDATE utilisateur SET motdepasse=:newpassw WHERE mail=:mail ');
    $requete->execute(array("newpassw"=>$newpassw,
        "mail"=>$mail));
    echo "Mot de passe modifié, l'utilisateur avec le mail " .$mail. " a maintenant le mdp : " . $newpassw ;
}
modifmdp($newpassw,$mail);
sendmail_forgetpassw($mail_forgetpassw,$newpassw);

?>