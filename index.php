<?php


include("Modèle/requete.boutique.php");
include("Modèle/requete.capteur.php");
if($_GET['cible']!='register'and $_GET['cible']!='connexion' and $_GET['cible']!='mdp_oublier' and $_GET['cible']!='mdp_reset'){
    include("Vue/header_2.php");
    include ("Vue/footer.php");
}

if(isset($_GET['cible']) && !empty($_GET['cible'])) {
    $url = $_GET['cible'];
}
else {
    $url='first_page';
}



include ('Vue/'.$url.'.php');


