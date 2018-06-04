<?php
session_start()
?>

<?php


include("Modèle/requete.boutique.php");
include("Modèle/requete.capteur.php");


if (isset($_GET['cible']) && !empty($_GET['cible'])) {
    include("Vue/header_2.php");
}

if (isset($_GET['cible']) && !empty($_GET['cible'])) {
    $url = $_GET['cible'];
} else {
    $url = 'first_page';
}

include('Vue/' . $url . '.php');


if (isset($_GET['cible']) && !empty($_GET['cible'])) {
    include("Vue/footer.php");
}


