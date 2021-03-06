<?php
session_start();

?>

<?php
include("../Controleur/Securisation.php");
require "../Controleur/encryption_config.php";
require "../Controleur/encryption.php";
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
if (isset($_POST['addpanier'])) {
    header("location:../index.php?cible=panier");
}

?>

<?php
if (isset($_POST['retourshop'])) {
    header("location:../index.php?cible=shop");
}

?>

<?php
if (isset($_POST['Validerpanier'])) {
    header("location:../index.php?cible=#");
}

?>

<?php

if (isset($_POST['message'])) {
    header("location:../index.php?cible=forum");
}

?>

<?php
if (isset($_GET['session'])) {
    header("location:../");
    session_destroy();
}
?>

<?php if ($_POST['titre'] != NULL) {
    $titre = securisation($_POST['titre']);
    $bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
    $reponse = $bdd->prepare('INSERT INTO topic( titre, id_utilisateur,date_crea) VALUES (:titre, :id, NOW())');
    $reponse->execute(array(
        'titre' => $titre,
        'id' => $_SESSION['id'],
    ));
    $reponse->closeCursor();
}
?>


<?php
$commentaire = securisation($_POST['message']);
$bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
$reponse = $bdd->prepare('INSERT INTO message(id_topic,id_user,commentaire,date_commentaire) VALUES (:idtopic, :iduser,:comm, NOW())');
$reponse->execute(array(
    'idtopic' => securisation($_POST['titre']),
    'iduser' => $_SESSION['id'],
    'comm' => securisation($commentaire),
));
$reponse->closeCursor();
?>


<?php
if (ctype_alpha($_POST['nom'])) {
    $bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
    $reponse = $bdd->prepare('UPDATE utilisateur SET nom = :nvnom WHERE id_utilisateur=:id');
    $reponse->execute(array(
        'nvnom' => securisation($_POST['nom']),
        'id' => $_SESSION['id'],
    ));
}

?>

<?php if (ctype_alpha($_POST['prenom'])) {
    $bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
    $reponse = $bdd->prepare('UPDATE utilisateur SET prenom = :nvprenom WHERE id_utilisateur=:id');
    $reponse->execute(array(
        'nvprenom' => securisation($_POST['prenom']),
        'id' => $_SESSION['id'],
    ));
}
?>

<?php
$bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
$reponse = $bdd->prepare('UPDATE utilisateur SET numero = :nvnum WHERE id_utilisateur=:id');
$reponse->execute(array(
    'nvnum' => securisation($_POST['numero']),
    'id' => $_SESSION['id'],
));
?>

<?php if ((filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL))) {
    $bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
    $reponse = $bdd->prepare('UPDATE utilisateur SET mail = :nvmail WHERE id_utilisateur=:id');
    $reponse->execute(array(
        'nvmail' => securisation($_POST['mail']),
        'id' => $_SESSION['id'],
    ));
}
?>
<?php
$bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
$reponse = $bdd->prepare('UPDATE utilisateur SET password = :nvmdp WHERE id_utilisateur=:id');
if ($_POST['mdp'] != "") {
    $reponse->execute(array(
            'nvmdp' => Encryption::encrypt(securisation($_POST['mdp'])),
            'id' => $_SESSION['id']
        )
    );
};
?>

<?php

//recup message

$bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
$last = $bdd->query('SELECT MAX(id_topic) AS maxprix FROM topic');
while ($donnees = $last->fetch()) {
    $i = $donnees['maxprix'];
}
$reponse = $bdd->prepare('INSERT INTO message( id_topic, id_user,commentaire, date_commentaire) VALUES (:id_topic, :id_user,:commentaire, NOW())');
$reponse->execute(array(
    'id_topic' => $i,
    'id_user' => $_SESSION['id'],
    'commentaire' => securisation($_POST['message']),
));
?>

<?php


