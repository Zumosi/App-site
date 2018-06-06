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
    <link rel="stylesheet" href="Vue/stat.css" />
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Capteurs</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Vue/stat.css" />
    </head>
<body>

<?php if ($_GET['piece']== 'WC') {

    echo '<div class="container">
    <canvas id="WC" width="800" height="450"></canvas>
</div>';
    echo'<script src="Vue/GraphiqueWC.js"></script>';

    /*
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
    ';*/
}
elseif ($_GET['piece']== 'salon') {

    echo '<div class="container">
    <canvas id="Salon" width="800" height="450"></canvas>
</div>';
    echo'<script src="Vue/GraphiqueSalon.js">Salon();</script>';
    

}
elseif ($_GET['piece']== 'chambre') {

    echo '<div class="container">
    <canvas id="Chambre" width="800" height="450"></canvas>
</div>';
    echo '<script src="Vue/GraphiqueChambre.js"></script>';

}
elseif ($_GET['piece']== 'cuisine') {

    echo '<div class="container">
    <canvas id="Cuisine" width="800" height="450"></canvas>
</div>';
    echo'<script src="Vue/GraphiqueCuisine.js"></script>';


}
elseif ($_GET['piece']== 'sdb') {

    echo '<div class="container">
    <canvas id="SdB" width="800" height="450"></canvas>
</div>';
    echo'<script src="Vue/GraphiqueSdB.js"></script>';


}

/*
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
*/
?>
</body>