<?php
include_once("BDD.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <title>My Chart.js Chart</title>
</head>
<body>

<h1>Statistiques</h1>

<?php

function trouverdate(){
    $object = new Bdd;
    $requetedate = $object->connect()->prepare('SELECT consommation_date FROM consommation_jour WHERE piece_name="Salon" ');
    $requetedate->execute();
    $tabledate = $requetedate->fetchAll();
    $date=array();
    for ($i=0;$i<sizeof($tabledate);$i++){
        array_push($date,$tabledate[$i]["consommation_date"]);
    }
    echo "<pre>";
    print_r($date) ;
    echo "</pre>";
    return $date;
}

function consoSalon()
{
    $object = new Bdd;
    $requete = $object->connect()->prepare('SELECT consommation_value FROM consommation_jour WHERE piece_name="Salon" ');
    $requete->execute();
    $conso = $requete->fetchAll();
    $value=array();

    echo "<pre>";
    print_r($conso) ;
    echo "</pre>";
    for ($i=0;$i<sizeof($conso);$i++){
        array_push($value,$conso[$i]["consommation_value"]);
    }

    echo "<pre>";
    print_r($value) ;
    echo "</pre>";
    return $value;
}

function puissanceSalon()
{
    $object = new Bdd;
    $requete = $object->connect()->prepare('SELECT puissance_value FROM puissance_jour WHERE piece_name="Salon" ');
    $requete->execute();
    $conso = $requete->fetchAll();
    $puissance=array();
    for ($i=0;$i<sizeof($conso);$i++){
        array_push($puissance,$conso[$i]["puissance_value"]);
    }
    return $puissance;
}

function consoChambre()
{
    $object = new Bdd;
    $requete = $object->connect()->prepare('SELECT consommation_value FROM consommation_jour WHERE piece_name="Chambre" ');
    $requete->execute();
    $conso = $requete->fetchAll();
    $value=array();
    for ($i=0;$i<sizeof($conso);$i++){
        array_push($value,$conso[$i]["consommation_value"]);
    }
    for ($i=0;$i<sizeof($conso);$i++){
        array_push($value,$conso[$i]["consommation_value"]);
    }
    return $value;
}

function puissanceChambre()
{
    $object = new Bdd;
    $requete = $object->connect()->prepare('SELECT puissance_value FROM puissance_jour WHERE piece_name="Chambre" ');
    $requete->execute();
    $conso = $requete->fetchAll();
    $puissance=array();
    for ($i=0;$i<sizeof($conso);$i++){
        array_push($puissance,$conso[$i]["puissance_value"]);
    }
    return $puissance;
}

?>

<?php
$consoSalon = consoSalon();
$puissanceSalon = puissanceSalon();
$consoChambre = consoChambre();
$puissanceChambre = puissanceChambre();
$date = trouverdate();
echo '<script>';
echo 'var consoSalon = ' .json_encode($consoSalon) . ';';
echo 'var puissanceSalon = ' .json_encode($puissanceSalon) . ';';
echo 'var consoChambre = ' .json_encode($consoChambre) . ';';
echo 'var puissanceChambre = ' .json_encode($puissanceChambre) . ';';
echo 'var date = ' .json_encode($date) . ';';
echo '</script>';

?>


<div class="container">
    <canvas id="Salon" width="800" height="450"></canvas>
</div>
<div class="container">
    <canvas id="Chambre" width="800" height="450"></canvas>
</div>
<script src="Courbure.js"></script>
</body>
</html>

