<?php

if (isset($_POST['choix'])) {
    header("location:facture.php");
}

?>
<?php

if (isset($_POST['nom'])) {
    header("location:../index.php?cible=profil");
}

?>

<?php

if (isset($_POST['prenom'])) {
    header("location:../index.php?cible=profil");
}

?>

<?php

if (isset($_POST['numéro'])) {
    header("location:Vue/profil.php");
}

?>


<?php
if (ctype_alpha($_POST['nom'])) {
    $bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
    $reponse = $bdd->prepare('UPDATE utilisateur SET nom = :nvnom WHERE id_utilisateur=1');
    $reponse->execute(array(
        'nvnom' => $_POST['nom'],
    ));
} else {
    $bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
    $reponse = $bdd->prepare('UPDATE utilisateur SET nom = :nvnom WHERE id_utilisateur=1');
    $reponse->execute(array(
        'nvnom' => 'Veuillez entrez un nom',
    ));
}

?>



<?php
$bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
$reponse = $bdd->prepare('UPDATE utilisateur SET prenom = :nvprenom WHERE id_utilisateur=1');
$reponse->execute(array(
    'nvprenom' => $_POST['prenom'],
));

?>

<?php
$bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
$reponse = $bdd->prepare('UPDATE utilisateur SET numero = :nvnum WHERE id_utilisateur=1');
$reponse->execute(array(
    'nvnum' => $_POST['numéro'],
));
echo $_POST['nom'];
?>
