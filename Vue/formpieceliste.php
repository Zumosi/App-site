<?php
include("Modèle/requete.panier.php");
include("Controleur/BDD.php");
/*
$object = new Bdd;
$requete = $object->connect()->prepare('SELECT id_piece FROM piece WHERE type=:piece ');
$requete->execute(array("piece"=>$_GET["piece"]));
$idpiece=$requete->fetch();
$object = new Bdd;
$requete = $object->connect()->prepare(
        'INSERT INTO capteur (type,reference,etat,id_place)
          VALUES (:type,"LHI 968","off",:idpiece)');
$requete->execute(array("type"=>$_SESSION["nomcapteur"],
        "idpiece"=>$idpiece[0]
    ));
$requete = $object->connect()->prepare('UPDATE utilisateur SET NombreCapteurInfrarouge=NombreCapteurInfrarouge-1 WHERE id_utilisateur=:ID ');
$requete->execute(array("ID"=>$_SESSION["id"]));
$requete = $object->connect()->prepare('SELECT NombreCapteurInfrarouge FROM utilisateur WHERE id_utilisateur=:ID ');
$requete->execute(array("ID"=>$_SESSION["id"]));
$nombrecapteur=$requete->fetch();
$nombrecapteur=$nombrecapteur[0];
$_SESSION["quantitetotale"]=$nombrecapteur;
echo "Un capteur à été rajouté et est maintenant attribué à la pièce : " . $_GET["piece"] ;
echo "<br>";
echo " Vous disposez maintenant de ".$nombrecapteur . " capteur(s)." */
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--  <link rel="stylesheet" type="text/css"  href="" />
      <script type="text/javascript" src=""></script> -->
    <title>Validation </title>
</head>
<body>

<?php ajoutcapteur($_SESSION['idstock']) ?>


<h1><a href="index.php?cible=capteurdispo">Revenir au stock de vos capteurs</h1>


</body>
</html>


