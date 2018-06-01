<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Statistiques</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="vue/stat.css" />
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Capteurs</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="stat.css" />
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
<a href="index.php?cible=statistics2&piece=WC&cible=statistics2" class="wc">WC</a>
<img class="wci" src="Vue/image/wc.png" >

<a href="index.php?cible=statistics2&piece=sdb&cible=statistics2" class="sdb">salle de bain</a>
<img class="sdbi" src="Vue/image/sdb.png" >

<a href="index.php?cible=statistics2&piece=salon&cible=statistics2" class="salon">salon</a>
<img class="saloni" src="Vue/image/salon.png" >

<a href="index.php?cible=statistics2&piece=chambre&cible=statistics2" class="chambre">chambre</a>
<img class="chambri" src="Vue/image/chambre.png" >

<a href="index.php?cible=statistics2&piece=cuisine&cible=statistics2" class="cuisine">cuisine</a>
<img class="cuisini" src="Vue/image/cuisine.jpg" ></section>
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

<section>
    <h1 class="titre">Statistiques</h1>
<a href="index.php?cible=statistics2&piece=WC&cible=statistics2" class="wc">WC</a>
<img class="wci" src="Vue/image/wc.png" >

<a href="index.php?cible=statistics2&piece=sdb&cible=statistics2" class="sdb">salle de bain</a>
<img class="sdbi" src="Vue/image/sdb.png" >

<a href="index.php?cible=statistics2&piece=salon&cible=statistics2" class="salon">salon</a>
<img class="saloni" src="Vue/image/salon.png" >

<a href="index.php?cible=statistics2&piece=chambre&cible=statistics2" class="chambre">chambre</a>
<img class="chambri" src="Vue/image/chambre.png" >

<a href="index.php?cible=statistics2&piece=cuisine&cible=statistics2" class="cuisine">cuisine</a>
<img class="cuisini" src="Vue/image/cuisine.jpg" ></section>

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
    
<section>
    <h1 class="titre">Statistiques</h1>
<a href="index.php?cible=statistics2&piece=WC&cible=statistics2" class="wc">WC</a>
<img class="wci" src="Vue/image/wc.png" >

<a href="index.php?cible=statistics2&piece=sdb&cible=statistics2" class="sdb">salle de bain</a>
<img class="sdbi" src="Vue/image/sdb.png" >

<a href="index.php?cible=statistics2&piece=salon&cible=statistics2" class="salon">salon</a>
<img class="saloni" src="Vue/image/salon.png" >

<a href="index.php?cible=statistics2&piece=chambre&cible=statistics2" class="chambre">chambre</a>
<img class="chambri" src="Vue/image/chambre.png" >

<a href="index.php?cible=statistics2&piece=cuisine&cible=statistics2" class="cuisine">cuisine</a>
<img class="cuisini" src="Vue/image/cuisine.jpg" ></section>

<?php consopuissanceSalon(1)  ?>
<img class="cadre" src="encadre.png" >
    <p class="stat">Statistiques Salon</p>
    <p class="consommation">Consommation:</p>
    <p class="puissance">Puissance:</p>
    ';
}
elseif ($_GET['piece']== 'chambre') {
    echo'
   
<section>
    <h1 class="titre">Statistiques</h1>
<a href="index.php?cible=statistics2&piece=WC&cible=statistics2" class="wc">WC</a>
<img class="wci" src="Vue/image/wc.png" >

<a href="index.php?cible=statistics2&piece=sdb&cible=statistics2" class="sdb">salle de bain</a>
<img class="sdbi" src="Vue/image/sdb.png" >

<a href="index.php?cible=statistics2&piece=salon&cible=statistics2" class="salon">salon</a>
<img class="saloni" src="Vue/image/salon.png" >

<a href="index.php?cible=statistics2&piece=chambre&cible=statistics2" class="chambre">chambre</a>
<img class="chambri" src="Vue/image/chambre.png" >

<a href="index.php?cible=statistics2&piece=cuisine&cible=statistics2" class="cuisine">cuisine</a>
<img class="cuisini" src="Vue/image/cuisine.jpg" >
</section>
 <?php consopuissanceChambre(1)  ?>
<div class="nav">
    <img class="cadre" src="encadre.png" >
    <p class="stat">Statistiques Chambre</p>
    <p class="consommation">Consommation:</p>
    <p class="puissance">Puissance:</p>
</div>
    ';
}

elseif ($_GET['piece']== 'cuisine') {
    echo'
   
<section>
    <h1 class="titre">Statistiques</h1>
<a href="index.php?cible=statistics2&piece=WC&cible=statistics2" class="wc">WC</a>
<img class="wci" src="Vue/image/wc.png" >

<a href="index.php?cible=statistics2&piece=sdb&cible=statistics2" class="sdb">salle de bain</a>
<img class="sdbi" src="Vue/image/sdb.png" >

<a href="index.php?cible=statistics2&piece=salon&cible=statistics2" class="salon">salon</a>
<img class="saloni" src="Vue/image/salon.png" >

<a href="index.php?cible=statistics2&piece=chambre&cible=statistics2" class="chambre">chambre</a>
<img class="chambri" src="Vue/image/chambre.png" >

<a href="index.php?cible=statistics2&piece=cuisine&cible=statistics2" class="cuisine">cuisine</a>
<img class="cuisini" src="Vue/image/cuisine.jpg" >
</section>
 <?php consopuissanceCuisine(1)  ?>
<div class="nav">
    <img class="cadre" src="encadre.png" >
    <p class="stat">Statistiques Cuisine</p>
    <p class="consommation">Consommation:</p>
    <p class="puissance">Puissance:</p>
</div>
    ';
}