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
<br><br><br>
<img id="project1" src="Ciel.jpg" width="50" height="50" data-src="Ciel.jpg" data-hover="ciel b.jpg" alt=""  />
<br>

<div id="question1">

<p>AAA</p>

</div>





<?php


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
  /*  $conso=$bdd->prepare('SELECT * FROM consommation_jour WHERE piece_name="salon"');
    $conso->execute(array($im));
    while($donnees = $conso->fetch()) {
        echo ' <strong class="consoValue">' . $donnees['consommation_value'] . '</strong><br/>';
        echo 'Vous avez consommé' .($_POST['puissance_value']) . '!';
    }*/
    $power=$bdd->prepare('SELECT puissance_value FROM puissance_jour WHERE piece_name="salon"');
   $power->execute(array($im));
    while($donnees2 = $power->fetch()) {
        echo ' <strong class="powerValue">' . $donnees2['puissance_value'] . '</strong><br/>';
        echo 'Vous avez consommé' .($_POST['puissance_value']) . '!';
    }
}

//echo 'puissance : <strong>' . $puissance . '</strong><br/>';

function consopuissanceCuisine($im)
{
    $bdd= new PDO('mysql:host=localhost;dbname=athome;charset=utf8',"root","");
    $conso=$bdd->prepare('SELECT * FROM consommation_jour WHERE piece_name="cuisine"');
    $conso->execute(array($im));
    while($donnees = $conso->fetch()) {
        return '<strong class="consoValue">' . $donnees['consommation_value'] . '</strong><br/>';
    }
    $power=$bdd->prepare('SELECT puissance_value FROM puissance_jour WHERE piece_name="cuisine"');
    $power->execute(array($im));
    while($donnees2 = $power->fetch()) {
        return $donnees2['puissance_value'];
    }
}

//echo 'puissance : <strong>' . $puissance . '</strong><br/>';

function consopuissanceSdb($im)
{
  $bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', "root", "");
 /* $conso = $bdd->prepare('SELECT * FROM consommation_jour WHERE piece_name="sdb"');
  $conso->execute(array($im));
  while ($donnees = $conso->fetch()) {
      echo $donnees['consommation_value'];
  }
*/



  $power=$bdd->prepare('SELECT puissance_value FROM puissance_jour WHERE piece_name="sdb"');
  $power->execute(array($im));
  while($donnees2 = $power->fetch()) {
      return $donnees2['puissance_value'];
  }
}
//echo 'puissance : <strong>' . $puissance . '</strong><br/>';
?>

<span id= "number" >
  <?php consopuissanceSalon($im); ?>
</span>
<?php
$numberPHP = 2;
echo $numberPHP;
?>
<div class="container">
    <canvas id="myChart"></canvas>
    <script type="text/javascript" src="Graphique.js"></script>
</div>
<script src="FonctionJS.js"></script>

</body>
</html>

