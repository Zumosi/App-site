<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Profil</title>
    <link rel="stylesheet" href="Vue/profil.css"/>
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
try {
    $bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
$user = 1;
$reponse = $bdd->prepare('SELECT * FROM utilisateur WHERE id_utilisateur = ? ');
$reponse->execute(array($user));
while ($donnees = $reponse->fetch()) {
    ?>
    <p>
    <form method="post" action="Vue/liste.php">
        <table>
            <tr>
                <td><strong>Nom</strong> : <br/><br/>

                    <?php if (isset($_GET['nom'])) {
                        echo '<input type="text" name="nom" />';
                    } else {
                        echo $donnees['nom'];

                    }
                    ?>


            </tr>
            <tr>
                <td><strong> Prenom </strong> :<br/><br/>
                    <?php if (isset($_GET['prenom'])) {
                        echo '<input type="text" name="prenom" />';
                    } else {
                        echo $donnees['prenom'];

                    }
                    ?>
            </tr>
            <tr>
                <td><strong> Numéro </strong> :<br/><br/>
                    <?php if (isset($_GET['numéro'])) {
                        echo '<input type="text" name="numéro" />';
                    } else {
                        echo $donnees['numero'];
                    }
                    ?>
            </tr>

            <tr>
                <td><strong> Mail </strong> :<br/><br/> <?php echo $donnees['mail']; ?>
                    <br/></td>
            </tr>

            <tr>
                <td><strong> Mot de Passe </strong> :<br/><br/> ******
                </td>
            </tr>


        </table>
        <input id="bouton" type="submit" value="Modifier">
    </form>
    </p>

    <?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>
</body>
</html>
