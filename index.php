<?php
include ("Vue/header.php");

include("Modèle/requete.boutique.php");
include("Modèle/requete.capteur.php");

if(isset($_GET['cible']) && !empty($_GET['cible'])) {
    $url = $_GET['cible'];
}
else {
    $url='header';
}


include ('Vue/' .$url.'.php');

include ("Vue/footer.php");

?>