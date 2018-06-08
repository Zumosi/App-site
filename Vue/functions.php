<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../css/stat.css" />
</head>





<body>
<<?php
/**
 * Created by IntelliJ IDEA.
 * User: Julien
 * Date: 04/05/2018
 * Time: 19:21
 */

function consopuissanceChambre($im)
{
    $bdd= new PDO('mysql:host=localhost;dbname=athome;charset=utf8',"root","");
    $conso=$bdd->prepare('SELECT consommation_value FROM consommation_jour WHERE piece_name="chambre"');
    $conso->execute(array($im));
    while($donnees = $conso->fetch()) {
        echo ' <strong class="consoValue">' . $donnees['consommation_value'] . '</strong><br/>';
    }
    $power=$bdd->prepare('SELECT puissance_value FROM puissance_jour WHERE piece_name="chambre"');
    $power->execute(array($im));
    while($donnees2 = $power->fetch()) {
        echo ' <strong class="powerValue">' . $donnees2['puissance_value'] . '</strong><br/>';
    }
}


function consopuissanceWC($im)
{
    $bdd= new PDO('mysql:host=localhost;dbname=athome;charset=utf8',"root","");
    $conso=$bdd->prepare('SELECT * FROM consommation_jour WHERE piece_name="wc"');
    $conso->execute(array($im));
    while($donnees = $conso->fetch()) {
        echo '<strong class="consoValue">' . $donnees['consommation_value'] . '</strong><br/>';
    }
    $power=$bdd->prepare('SELECT puissance_value FROM puissance_jour WHERE piece_name="wc"');
    $power->execute(array($im));
    while($donnees2 = $power->fetch()) {
        echo ' <strong class="powerValue">' . $donnees2['puissance_value'] . '</strong><br/>';
    }
}

//echo 'puissance : <strong>' . $puissance . '</strong><br/>';

function consopuissanceSalon($im)
{
    $bdd= new PDO('mysql:host=localhost;dbname=athome;charset=utf8',"root","");
    $conso=$bdd->prepare('SELECT * FROM consommation_jour WHERE piece_name="salon"');
    $conso->execute(array($im));
    while($donnees = $conso->fetch()) {
        echo ' <strong class="consoValue">' . $donnees['consommation_value'] . '</strong><br/>';
    }
    $power=$bdd->prepare('SELECT puissance_value FROM puissance_jour WHERE piece_name="salon"');
    $power->execute(array($im));
    while($donnees2 = $power->fetch()) {
        echo ' <strong class="powerValue">' . $donnees2['puissance_value'] . '</strong><br/>';
    }
}

//echo 'puissance : <strong>' . $puissance . '</strong><br/>';

function consopuissanceCuisine($im)
{
    $bdd= new PDO('mysql:host=localhost;dbname=athome;charset=utf8',"root","");
    $conso=$bdd->prepare('SELECT * FROM consommation_jour WHERE piece_name="cuisine"');
    $conso->execute(array($im));
    while($donnees = $conso->fetch()) {
        echo '<strong class="consoValue">' . $donnees['consommation_value'] . '</strong><br/>';
    }
    $power=$bdd->prepare('SELECT puissance_value FROM puissance_jour WHERE piece_name="cuisine"');
    $power->execute(array($im));
    while($donnees2 = $power->fetch()) {
        echo ' <strong class="powerValue">' . $donnees2['puissance_value'] . '</strong><br/>';
    }
}

//echo 'puissance : <strong>' . $puissance . '</strong><br/>';

function consopuissanceSdb($im)
{
    $bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', "root", "");
    $conso = $bdd->prepare('SELECT * FROM consommation_jour WHERE piece_name="sdb"');
    $conso->execute(array($im));
    while ($donnees = $conso->fetch()) {
        echo ' <strong class="consoValue">' . $donnees['consommation_value'] . '</strong><br/>';
    }
    $power=$bdd->prepare('SELECT puissance_value FROM puissance_jour WHERE piece_name="sdb"');
    $power->execute(array($im));
    while($donnees2 = $power->fetch()) {
        echo ' <strong class="powerValue">' . $donnees2['puissance_value'] . '</strong><br/>';
    }
}
//echo 'puissance : <strong>' . $puissance . '</strong><br/>';
?>

</body>
</html>

