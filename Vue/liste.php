<?php session_start();
$_SESSION['id']=1;
?>
<?php
session_start();
$_SESSION['id']=1;
?>


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

if (isset($_POST['message'])) {
    header("location:../index.php?cible=forum");
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
//recup titre
<?php
$bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
$reponse= $bdd->prepare('INSERT INTO topic( titre, id_utilisateur,date_crea) VALUES (:titre, :id, NOW())');
$reponse->execute(array(
    'titre' => $_POST['titre'],
    'id' => $_SESSION['id'],
));
$reponse->closeCursor();
?>

<?php

//recup message

$bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
$last= $bdd->query('SELECT MAX(id_topic) AS maxprix FROM topic');
while ($donnees = $last->fetch()) {
    $i = $donnees['maxprix'];
}
$reponse= $bdd->prepare('INSERT INTO message( id_topic, id_user,commentaire, date_commentaire) VALUES (:id_topic, :id_user,:commentaire, NOW())');
$reponse->execute(array(
'id_topic'=> $i,
'id_user' => $_SESSION['id'],
'commentaire' => $_POST['message'],
));
?>