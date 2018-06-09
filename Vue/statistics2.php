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

<?php if ($_GET['piece'] == 'WC') {

    echo '<div class="container">
    <canvas class="WCg" width="30" height="15"></canvas>
</div>';
    echo '<script src="Vue/GraphiqueWC.js"></script>';
    echo '
<section>
    <p class="titre">Statistiques</p>
<a href="index.php?cible=statistics2&piece=WC&cible=statistics2" class="wc">WC</a>
<img class="wci" src="Vue/image/wc.png" >

<a href="index.php?cible=statistics2&piece=sdb&cible=statistics2" class="sdb">salle de bain</a>
<img class="sdbi" src="Vue/image/sdb.png" >

<a href="index.php?cible=statistics2&piece=salon&cible=statistics2" class="salon">salon</a>
<img class="saloni" src="Vue/image/salon.png" >

<a href="index.php?cible=statistics2&piece=chambre&cible=statistics2" class="chambre">chambre</a>
<img class="chambri" src="Vue/image/chambre.png" >

<a href="index.php?cible=statistics2&piece=cuisine&cible=statistics2" class="cuisine">cuisine</a>
<img class="cuisini" src="Vue/image/cuisine.jpg" ></section>';
} elseif ($_GET['piece'] == 'sdb') {
    echo '<div class="container">
    <canvas class="SdBg" width="30" height="15"></canvas>
</div>';
    echo '<script src="Vue/GraphiqueSdB.js"></script>';
    echo '
<section>
    <p class="titre">Statistiques</p>
<a href="index.php?cible=statistics2&piece=WC&cible=statistics2" class="wc">WC</a>
<img class="wci" src="Vue/image/wc.png" >

<a href="index.php?cible=statistics2&piece=sdb&cible=statistics2" class="sdb">salle de bain</a>
<img class="sdbi" src="Vue/image/sdb.png" >

<a href="index.php?cible=statistics2&piece=salon&cible=statistics2" class="salon">salon</a>
<img class="saloni" src="Vue/image/salon.png" >

<a href="index.php?cible=statistics2&piece=chambre&cible=statistics2" class="chambre">chambre</a>
<img class="chambri" src="Vue/image/chambre.png" >

<a href="index.php?cible=statistics2&piece=cuisine&cible=statistics2" class="cuisine">cuisine</a>
<img class="cuisini" src="Vue/image/cuisine.jpg" ></section> ';
} elseif ($_GET['piece'] == 'salon') {
    echo '<div class="container">
    <canvas class=Salong width="30" height="15"></canvas>
</div>';
    echo '<script src="Vue/GraphiqueSalon.js"></script>';
    echo '
<section>
    <p class="titre">Statistiques</p>
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
</section>';
} elseif ($_GET['piece'] == 'chambre') {
    echo '<div class="container">
    <canvas class="Chambreg" width="30" height="15"></canvas>
</div>';
    echo '<script src="Vue/GraphiqueChambre.js"></script>';
    echo '
<section>
    <p class="titre">Statistiques</p>
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
</section>';
} elseif ($_GET['piece'] == 'cuisine') {
    echo '<div class="container">
    <canvas class="Cuisineg" width="30" height="15"></canvas>
</div>';
    echo '<script src="Vue/GraphiqueCuisine.js"></script>';
    echo '
   
<section>
    <p class="titre">Statistiques</p>
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
</section>';
}

?>
</body>