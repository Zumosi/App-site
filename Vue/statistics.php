<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Statistiques</title>
    <link rel="stylesheet" href="css/stat.css" />
</head>

<?php
include("Controleur/BDD.php");
$object = new Bdd;
$_SESSION["id"];
$requete = $object->connect()->prepare('SELECT nom FROM piece WHERE id_maison IN(SELECT id_habitation FROM habitation WHERE id_user=:id_user )');
$requete->execute(array("id_user"=>$_SESSION["id"]));
$tablepiece = $requete->fetchAll();
$_SESSION["piece"]=$tablepiece;
?>



<body>

<p class="titre">Statistiques</p>
<p class="instruction">Cliquez sur la pièce de votre choix pour observer la consommation des capteurs dans celle-ci.</p>
<?php

for ($i=0;$i<sizeof($tablepiece);$i++) {
    $requete = $object->connect()->prepare('SELECT type FROM piece WHERE nom=:piecename ');
    $requete->execute(array("piecename" => $tablepiece[$i]["nom"]));
    $typepiece = $requete->fetchAll();
    $typepiece = $typepiece[0][0];
   // $typepiecei = $typepiece."i";
    $nom = $tablepiece[$i]["nom"];
    echo "<a href='index.php?cible=statistics2&piece=$typepiece&cible=statistics2&nompiece=$nom' class='Piece'>";
    echo $tablepiece[$i]["nom"];
    echo "<img class='$typepiece.i' src='Vue/image/$typepiece.png'>";
    echo "<br>";
}
echo '</body>';
echo '</html>';
?>

