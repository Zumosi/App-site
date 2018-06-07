
<?php
session_start();
include_once("BDD.php");
//include("Securisation.php");


if($_POST["nom"]!=""){
    $mail = $_POST["nom"];
   // $name = securisation ($name);

    $object = new Bdd;
    $requete = $object->connect()->prepare('SELECT id_utilisateur FROM utilisateur WHERE id_utilisateur=:ID ');
    $requete->execute(array("ID"=>$_SESSION["id"]));
    $newnum = $requete->fetch();
    $requete = $object->connect()->prepare('UPDATE utilisateur SET num_principal=:newnum WHERE mail=:mail ');
    $requete->execute(array("newnum"=>$newnum["id_utilisateur"],
        "mail"=>$mail));
    $requetetype = $object->connect()->prepare('UPDATE utilisateur SET type="secondaire" WHERE mail=:mail ');
    $requetetype->execute(array("mail"=>$mail));
    echo "Vous avez bien ajouté " .$mail. " comme utilisateur secondaire";

}








