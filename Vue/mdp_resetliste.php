<?php
include("../Controleur/BDD.php");
require "../Controleur/encryption_config.php";
require "../Controleur/encryption.php";
$email=$_POST["email"];
if(($_POST["newpass"])!=""&&($_POST["newpass"])==($_POST["cnewpass"])){
    $object = new Bdd;
    $requete = $object->connect()->prepare('UPDATE utilisateur SET password=:newpassw WHERE mail=:mail ');
    $requete->execute(array("newpassw"=>Encryption::encrypt($_POST["cnewpass"]),
        "mail"=>$email));
    echo "Mot de passe modifié, l'utilisateur avec le mail " .$email. " a maintenant le mdp : " . $_POST["cnewpass"] ;
    header("Location: connexion.php");
}
else{
    echo "Les mots de passe ne correspondent pas!";
}
?>