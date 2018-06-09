<?php
session_start();
include("../Modèle/requete.panier.php");
?>
<?php

if (isset($_POST['addpanier'])) {

    header("location:../index.php?cible=panier&quantite=" . $_POST["quantite"] . "&prix=" . $_POST["prix"] . " ");

}

?>

<?php

if (isset($_POST['Validerpanier'])) {
    header("location:../index.php?cible=capteurdispo ");
}

?>

<?php

if (isset($_POST['send'])) {


    header("location:../index.php?cible=formpiece&idstock=".$_POST['send']." ");

}

?>

<?php

if (isset($_POST['envoyer'])) {
    $idpiece=idpiece($_POST['piece']);
    header("location:../index.php?cible=formpieceliste&idpiece=". $idpiece . "&piece=" . $_POST["piece"] . " ");

}

?>



