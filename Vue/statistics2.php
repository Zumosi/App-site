<?php
include("Graphique.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Statistiques</title>
    <script src="Vue/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Vue/stat.css"/>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Capteurs</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/stat.css"/>
    </head>
<body>

<?php
$object = new Bdd;
$tablepiece=$_SESSION["piece"];
$pieceaffiche=$_GET['piece'];
$pieceafficheg=$pieceaffiche."g";

echo '<div class="container">';
echo "<canvas class='$pieceafficheg' width='30' height='15'></canvas></div>";
echo "<script src='Vue/Graphique$pieceaffiche.js'></script>";
echo "<section><p class='titre'>Statistiques</p>";
for($i=0;$i<sizeof($tablepiece);$i++){
    $requete = $object->connect()->prepare('SELECT type FROM piece WHERE nom=:piecename ');
    $requete->execute(array("piecename" => $tablepiece[$i]["nom"]));
    $typepiece = $requete->fetchAll();
    $typepiece = $typepiece[0][0];
    if($tablepiece[$i]['nom']==$_GET['nompiece']){
    }
    else{
        $nom = $tablepiece[$i]["nom"];
        $typepiecei = $typepiece."i";
        echo "<a href='index.php?cible=statistics2&piece=$typepiece&cible=statistics2&nompiece=$nom' class='$typepiece.i'>";
        echo $tablepiece[$i]['nom'];
        echo "</a>";
        echo "<img class='$typepiece.i' src='Vue/image/$typepiece.png'>";
    };
}
?>
</body>
</html>