<?php
include("../Controleur/BDD.php");
echo "capteurs ajoutés!";
echo "<br>";

$_POST["idcapteur"]=1;
$object = new Bdd;
$requete = $object->connect()->prepare('SELECT id_piece FROM piece WHERE type=:piece ');
$requete->execute(array("piece"=>$_POST["piece"]));
$idpiece=$requete->fetch();
$object = new Bdd;
$requete = $object->connect()->prepare('UPDATE capteur SET id_place=:idpiece WHERE id_capteur=:ID ');
$requete->execute(array("idpiece"=>$idpiece[0],
    "ID"=>$_POST["idcapteur"]));
echo "Le capteur avec l'id " .$_POST["idcapteur"]. " est maintenant attribué à la pièce : " . $_POST["piece"] ;
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



<h1><a href="capteurdispo.php">Revenir a la page d'ajout</h1>


</body>
</html>


