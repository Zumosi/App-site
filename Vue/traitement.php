<?php

if (isset($_POST['addpanier'])) {
    header("location:../index.php?cible=panier&quantite=".$_POST["quantite"]."&prix=".$_POST["prix"]." ");

}

?>

<?php

if (isset($_POST['capteurdispo'])) {
    header("location:../index.php?cible=panier&quantite=".$_POST["quantite"]."&prix=".$_POST["prix"]." ");

}

?>
