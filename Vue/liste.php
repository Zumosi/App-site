<?php
session_start();
$_SESSION['id'] = 1;
?>


<?php

if (isset($_POST['choix'])) {
    header("location:facture.php");
}

?>

<?php

if (!isset($_POST['bouton'])) {
    header("location:../index.php?cible=profil&modif=5");
}

?>
<?php

if (isset($_POST['nom'])) {
    header("location:../index.php?cible=profil");
}

?>


<?php

if (isset($_POST['message'])) {
    header("location:../index.php?cible=forum");
}

?>


<?php
$bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
$reponse = $bdd->prepare('INSERT INTO topic( titre, id_utilisateur,date_crea) VALUES (:titre, :id, NOW())');
$reponse->execute(array(
    'titre' => $_POST['titre'],
    'id' => $_SESSION['id'],
));
$reponse->closeCursor();
?>

<?php
if (ctype_alpha($_POST['nom'])) {
    $bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
    $reponse = $bdd->prepare('UPDATE utilisateur SET nom = :nvnom WHERE id_utilisateur=1');
    $reponse->execute(array(
        'nvnom' => $_POST['nom'],
    ));
}

?>

<?php if (ctype_alpha($_POST['prenom'])) {
    $bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
    $reponse = $bdd->prepare('UPDATE utilisateur SET prenom = :nvprenom WHERE id_utilisateur=1');
    $reponse->execute(array(
        'nvprenom' => $_POST['prenom'],
    ));
}
?>

<?php if (ctype_digit($_POST['numero']) && ($_POST['numero'] < 10)) {
    $bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
    $reponse = $bdd->prepare('UPDATE utilisateur SET numero = :nvnum WHERE id_utilisateur=1');
    $reponse->execute(array(
        'nvnum' => $_POST['numéro'],
    ));
}
?>

<?php if ((filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL))) {
    $bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
    $reponse = $bdd->prepare('UPDATE utilisateur SET mail = :nvmail WHERE id_utilisateur=1');
    $reponse->execute(array(
        'nvmail' => $_POST['mail'],
    ));
}
?>

<?php
$bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
$reponse = $bdd->prepare('UPDATE utilisateur SET password = :nvmdp WHERE id_utilisateur=1');
$reponse->execute(array(
    'nvmdp' => $_POST['mdp'],
));
?>
