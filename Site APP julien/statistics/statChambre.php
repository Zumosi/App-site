<?php
/**
 * Created by IntelliJ IDEA.
 * User: Julien
 * Date: 04/05/2018
 * Time: 15:00
 */






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="stat.css" />
</head>

<?php include ("functions.php"); ?>



<body>
<?php consopuissanceChambre(1)  ?>
<div class="nav">
    <img class="cadre" src="encadre.png" >
    <p class="stat">Statistiques Chambre</p>
    <p class="consommation">Consommation:</p>
    <p class="puissance">Puissance:</p>
</div>
<h1>Statistiques</h1>

<a href="statWC.php" class="wc">WC</a>
<img class="wci" src="wc.png" >

<a href="statSdb.php" class="sdb">salle de bain</a>
<img class="sdbi" src="sdb.png" >

<a href="statSalon.php" class="salon">salon</a>
<img class="saloni" src="salon.png" >

<a href="statChambre.php" class="chambre">chambre</a>
<img class="chambri" src="chambre.png" >

<a href="statCuisine.php" class="cuisine">cuisine</a>
<img class="cuisini" src="cuisine.jpg" >
</body>
</html>





