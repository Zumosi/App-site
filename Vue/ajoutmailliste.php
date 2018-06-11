<?php
session_start();
include("../Controleur/mail.php");
include("../Controleur/securisation.php");
include("../Controleur\BDD.php");
?>


<?php

$object = new Bdd;
$id=$_SESSION["id"];
$requete = $object->connect()->prepare('SELECT mail FROM utilisateur WHERE id_utilisateur=:ID');
$requete->execute(array(
        "ID"=>$id));
$mail=$requete->fetch();
$mail=$mail["mail"];
$objet=securisation($_POST["objetmail"]);
$message = securisation($_POST["msgmail"]);
sendmail($message, $objet,$mail);
header('Location: http://localhost/App-site/index.php?cible=maison');
?>