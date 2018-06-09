<?php
session_start()
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
    header("location:../index.php?cible=formpiece ");

}

?>

<?php

if (isset($_POST['envoyer'])) {
    header("location:../index.php?cible=formpieceliste&piece=" . $_POST["piece"] . " ");

}

?>
<?php
$bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
$reponse = $bdd->prepare('INSERT INTO stockuser( id_captacheter,id_acheteur,id_quantite) VALUES (:captacheter, :acheteur, :quantite)');
$reponse->execute(array(
    'captacheter' => 1,
    'acheteur' => $_SESSION['id'],
    'quantite' =>$_POST["quantite"],
));
$reponse->closeCursor();

?>