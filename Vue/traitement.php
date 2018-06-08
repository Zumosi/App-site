<?php

if (isset($_POST['addpanier'])) {
    header("location:../index.php?cible=panier&quantite=".$_POST["quantite"]."&prix=".$_POST["prix"]." ");

}

?>

<?php

if (isset($_POST['Validerpanier'])) {
    header("location:../index.php?cible=capteurdispo ");

}

?>

<?php

if (isset($_POST['send'])) {
    header("location:../index.php?cible=formpiece ");

}

?>

<?php

if (isset($_POST['envoyer'])) {
    header("location:../index.php?cible=formpieceliste&piece=".$_POST["piece"]." ");

}

?>
