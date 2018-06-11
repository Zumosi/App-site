<?php
session_start();
include("securisation.php");
include_once("BDD.php");

if($_POST["nom"]!=""){
    $mail = securisation($_POST["nom"]);
   // $name = securisation ($name);

    $object = new Bdd;
    $requete = $object->connect()->prepare('SELECT id_utilisateur FROM utilisateur WHERE id_utilisateur=:ID ');
    $requete->execute(array("ID"=>$_SESSION["id"]));
    $newnum = $requete->fetch();


    $requete = $object->connect()->prepare('SELECT nom,prenom FROM utilisateur WHERE mail=:mail ');
    $requete->execute(array(
        "mail"=>$mail));
    $testexiste=$requete->fetch();
    if($testexiste!=false) {
        $requete = $object->connect()->prepare('UPDATE utilisateur SET num_principal=:newnum WHERE mail=:mail ');
        $requete->execute(array("newnum" => $newnum["id_utilisateur"],
            "mail" => $mail));
        $requetetype = $object->connect()->prepare('UPDATE utilisateur SET type="secondaire" WHERE mail=:mail ');
        $requetetype->execute(array("mail" => $mail));

        $prenom=$testexiste["prenom"];
        $nom=$testexiste["nom"];

        echo "Vous avez bien ajouté $prenom $nom avec le mail  $mail   comme utilisateur secondaire.";
    }
    else if($testexiste==false){
        echo "L'utilisateur correspondant au mail  $mail  n'est pas répertorié dans notre base de donnée." ;
    }
}








