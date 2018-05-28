<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Capteurs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="vue/stat.css" />
</head>
<body>

/**
 * Created by IntelliJ IDEA.
 * User: Julien
 * Date: 17/05/2018
 * Time: 10:03
 */

<?php if ($_GET['piece']== 'WC') {
    echo '

<section>
    <h1 class="titre">Statistiques</h1>
<a href="statWC.php" class="wc">WC</a>
<img class="wci" src="wc.png" >

<a href="statSdb.php" class="sdb">salle de bain</a>
<img class="sdbi" src="sdb.png" >

<a href="statSalon.php" class="salon">salon</a>
<img class="saloni" src="salon.png" >

<a href="statChambre.php" class="chambre">chambre</a>
<img class="chambri" src="chambre.png" >

<a href="statCuisine.php" class="cuisine">cuisine</a>
<img class="cuisini" src="cuisine.jpg" ></nav>
</section>
<?php consopuissanceWC(1)  ?>
    <div class="nav">
    <img class="cadre" src="encadre.png" >
<p class="stat">Statistiques WC</p>
<p class="consommation">Consommation:</p>
<p class="puissance">Puissance:</p>
</div>
    ';
}
elseif ($_GET['piece']== 'sdb') {
    echo '

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
<?php consopuissanceSdb(1)  ?>
    <div class="nav">
    <img class="cadre" src="encadre.png" >
    <p class="stat">Statistiques Salle de bain</p>
    <p class="consommation">Consommation:</p>
    <p class="puissance">Puissance:</p>
</div>
    ';
}
elseif ($_GET['piece']== 'salon') {
    echo'
    
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
<?php consopuissanceSalon(1)  ?>
<img class="cadre" src="encadre.png" >
    <p class="stat">Statistiques Salon</p>
    <p class="consommation">Consommation:</p>
    <p class="puissance">Puissance:</p>
    ';
}
elseif ($_GET['piece']== 'chambre') {
    echo'
   
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
 <?php consopuissanceChambre(1)  ?>
<div class="nav">
    <img class="cadre" src="encadre.png" >
    <p class="stat">Statistiques Chambre</p>
    <p class="consommation">Consommation:</p>
    <p class="puissance">Puissance:</p>
</div>
    ';
}