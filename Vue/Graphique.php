<?php
include_once("../Controleur/BDD.php");
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

function consopuissanceWC()
{
    $object = new Bdd;
    $requete = $object->connect()->prepare('SELECT consommation_value FROM consommation_jour WHERE piece_name="wc" LIMIT 1');
    $requete->execute();
    $conso = $requete->fetchAll();
    $value=$conso[0]["consommation_value"];
    return $value;


}

?>

<?php

function consopuissanceChambre()
{
    $object = new Bdd;
    $requete = $object->connect()->prepare('SELECT consommation_value FROM consommation_jour WHERE piece_name="Chambre" LIMIT 1');
    $requete->execute();
    $conso = $requete->fetchAll();
    $value=$conso[0]["consommation_value"];
    return $value;


}

?>

<?php

function consopuissanceSalon()
{
    $object = new Bdd;
    $requete = $object->connect()->prepare('SELECT consommation_value FROM consommation_jour WHERE piece_name="Salon" LIMIT 1');
    $requete->execute();
    $conso = $requete->fetchAll();
    $value=$conso[0]["consommation_value"];
    return $value;
}

?>

<?php
$capteur = array (consopuissanceWC(),consopuissanceChambre(),consopuissanceSalon());
echo '<script>';
echo 'var capteur = ' .json_encode($capteur) . ';';
echo '</script>';

?>

<div class="container">
    <canvas id="myChart"></canvas>
</div>
<script src="Graphique.js"></script>

</body>
</html>

