<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Statistiques</title>
    <script src="Vue/JS/jquery-3.3.1.min.js"></script>
    <script src="Vue/JS/Graphique-chart.bundle.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/stat.css"/>
    </head>
<body>

<?php

include("Controleur/BDD.php");

$object = new Bdd;
$requetedate = $object->connect()->prepare('SELECT id_piece FROM piece WHERE nom=:piece ');
$requetedate->execute(array("piece"=>$_GET["nompiece"]));
$id_piece = $requetedate->fetchAll();
$id_piece = $id_piece[0][0];

function trouverdate($id_piece){
    $object = new Bdd;
    $requetedate = $object->connect()->prepare('SELECT consommation_date FROM consommation_jour WHERE piece_id=:id_piece');
    $requetedate->execute(array("id_piece"=>$id_piece));
    $tabledate = $requetedate->fetchAll();
    $date=array();
    for ($i=0;$i<sizeof($tabledate);$i++){
        array_push($date,$tabledate[$i]["consommation_date"]);
    }
    return $date;
}

function conso($id_piece)
{
    $object = new Bdd;
    $requeteconso = $object->connect()->prepare('SELECT consommation_value FROM consommation_jour WHERE piece_id=:id_piece');
    $requeteconso->execute(array("id_piece"=>$id_piece));
    $conso = $requeteconso->fetchAll();
    $value=array();

    for ($i=0;$i<sizeof($conso);$i++){
        array_push($value,$conso[$i]["consommation_value"]);
    }

    return $value;
}


?>

<?php

$conso=conso($id_piece);
$date=trouverdate($id_piece);

echo '<script>';

echo 'var conso = ' .json_encode($conso) . ';';
echo 'var date = ' .json_encode($date) . ';';

echo '</script>';

?>
<?php

$tablepiece=$_SESSION["piece"];
$pieceaffiche=$_GET['piece'];

echo '<div class="container">';
echo "<canvas class='piece' width='30' height='15'></canvas></div>";
echo "<script src='Vue/JS/Graphique.js'></script>";
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