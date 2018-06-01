<?php


include("Modèle/requete.boutique.php");
include("Modèle/requete.capteur.php");

include("Vue/header_2.php");



if(isset($_GET['cible']) && !empty($_GET['cible'])) {
    $url = $_GET['cible'];
}
else {
    $url='acceuil';
}



include ('Vue/'.$url.'.php');

include ("Vue/footer.php");

