<?php

function idcapt($i)
{
    $bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
    $reponse = $bdd->prepare('SELECT * FROM capteur WHERE id_capteur = ?');
    $reponse->execute(array($i));
    while ($donnees = $reponse->fetch()) {
        echo $donnees['id_capteur'];
    }
    $reponse->closeCursor();
}
?>

<?php

function etatcapt($f)
{
    $bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
    $reponse = $bdd->prepare('SELECT * FROM capteur WHERE id_capteur = ?');
    $reponse->execute(array($f));
    while ($donnees = $reponse->fetch()) {
        echo $donnees['etat'];
    }
    $reponse->closeCursor();
}
?>

<?php

function loccapt($f)
{
    $bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
    $reponse = $bdd->prepare('SELECT * FROM piece WHERE id_piece = ?');
    $reponse->execute(array($f));
    while ($donnees = $reponse->fetch()) {
        echo $donnees['nom'];
    }
    $reponse->closeCursor();
}
?>
<?php
function utilcapt($f)
{
$bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
$reponse = $bdd->prepare('SELECT * FROM utilisateur WHERE id_utilisateur = ?');
$reponse->execute(array($f));
while ($donnees = $reponse->fetch()) {
echo $donnees['nom'];
echo '&nbsp' . $donnees['prenom'];
}
$reponse->closeCursor();
}
?>