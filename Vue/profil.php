<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Profil</title>
    <link rel="stylesheet" href="profil.css" />
</head>
<body>


<h1>Profil</h1>

<?php
function Modifier()
{

    echo '<table id="Modif" > 
    <tr> 
        <td id="Modifier">Modifier</td>
    </tr> </table>';
}
?>

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
$user='Nguyen';
// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table utilisateur
$reponse = $bdd->prepare('SELECT * FROM utilisateur WHERE nom = ? ');
$reponse ->execute(array($user));
// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
    ?>
    <p>
    <table>
        <tr>
            <td><strong>Nom</strong> : <br /><br /> <?php echo $donnees['nom']; ?><?php Modifier() ?><br /></td>
        </tr>
        <tr>
            <td><strong> Prenom </strong> :<br /><br /> <?php echo $donnees['prenom']; ?> <?php Modifier() ?><br /></td>

        </tr>
        <tr>
            <td><strong> Numéro </strong> :<br /><br /> <?php echo $donnees['numero']; ?><?php Modifier() ?><br /></td>
        </tr>
        <tr>
            <td><strong> Mail </strong> :<br /><br /> <?php echo $donnees['mail'];   ?><?php Modifier() ?><br /></td>
        </tr>
        <tr>
            <td><strong> Mot de Passe </strong> :<br /><br /> ****** <?php Modifier() ?><br /></td>
        </tr>
    </table>
    </p>

    <?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>
</body>
</html>