<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Profil</title>
</head>
<body>



<?php
try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM utilisateur');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
    ?>
    <p>
        <strong>Nom</strong> : <?php echo $donnees['nom']; ?><br />
        <strong> Prenom </strong> : <?php echo $donnees['prenom']; ?><br />
        <strong> Numéro </strong> : <?php echo $donnees['numero']; ?><br />
        <strong> Mail   </strong> : <?php echo $donnees['mail'];   ?><br />
    </p>
    <?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>
</body>
</html>