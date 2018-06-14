<?php
stats
echo '<a href="index.php?cible=statistics2&piece=sdb&cible=statistics2" class="sdb">salle de bain</a>
<img class="sdbi" src="Vue/image/sdb.png" >

<a href="index.php?cible=statistics2&piece=salon&cible=statistics2" class="salon">salon</a>
<img class="saloni" src="Vue/image/salon.png" >


<a href="index.php?cible=statistics2&piece=chambre&cible=statistics2" class="chambre">chambre</a>
<img class="chambri" src="Vue/image/chambre.png" >

<a href="index.php?cible=statistics2&piece=cuisine&cible=statistics2" class="cuisine">cuisine</a>
<img class="cuisini" src="Vue/image/cuisine.jpg" >';
};

stats 2

   echo '
<section>';

$requete = $object->connect()->prepare('SELECT type FROM piece WHERE nom=:piecename ');
$requete->execute(array("piecename" => $tablepiece[$i]["nom"]));
$typepiece = $requete->fetchAll();
$typepiece = $typepiece[0][0];

echo '<div class="container">';
echo "<canvas class='$typepiece.g' width='30' height='15'></canvas></div>";
echo "<script src='Vue/Graphique$typepiece.js'></script>";
    for($i=0;$i<sizeof($tablepiece)-1;$i++){
        if($tablepiece[$i]["nom"]==$_GET['piece']){
            }
        else{
            echo "<section><p class='titre'>Statistiques</p>";
            echo "<a href='index.php?cible=statistics2&piece=$typepiece&cible=statistics2' class='$typepiece.i'>";
            echo "<img class='$typepiece.i' src='Vue/image/$typepiece.png'>";
    };
}


echo "</section>'";




if ($_GET['piece'] == 'WC') {

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
