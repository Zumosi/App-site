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
    <table>
        <tr>
            <td><strong>Nom</strong> : <br/><br/>

                <?php if (isset($_GET['nom'])) {
                    echo '<form method="post" action="Vue/liste.php">
                              <input type="text" name="nom" />
                              <input id="Modif" type="submit" name="Valider">
                              </form>';
                } else {
                    echo $donnees['nom'];

                }
                ?>


                <?php if (!isset($_GET['nom'])) {
                    echo '<a href="index.php?nom=1&cible=profil">
                    <table id="Modif">
                        <tr>
                            <td id="Modifier">Modifier</td>
                        </tr>
                    </table>
                    <br/></td>
            </a>';
                }

                ?>


        </tr>
        <tr>
            <td><strong> Prenom </strong> :<br/><br/>
                <?php if (isset($_GET['prenom'])) {
                    echo '<form method="post" action="Vue/liste.php">
                              <input type="text" name="prenom" />
                              <input  id="Modif" type="submit" name="Valider">
                              </form>';
                } else {
                    echo $donnees['prenom'];

                }
                ?>
                <?php if (!isset($_GET['prenom'])) {
                    echo '<a href="index.php?prenom=1&cible=profil">
                    <table id="Modif">
                        <tr>
                            <td id="Modifier">Modifier</td>
                        </tr>
                    </table>
                    <br/></td>
            </a>';
                }

                ?>

        </tr>
        <tr>
            <td><strong> Numéro </strong> :<br/><br/>
                <?php if (isset($_GET['numéro'])) {
                    echo '<form method="post" action="liste.php">
                              <input type="text" name="numéro" />
                              <input  id="Modif" type="submit" name="Valider">
                              </form>';
                } else {
                    echo $donnees['numero'];
                }
                ?>
                <?php if (!isset($_GET['numéro'])) {
                    echo '<a href="index.php?numéro=1&cible=profil">
                    <table id="Modif">
                        <tr>
                            <td id="Modifier">Modifier</td>
                        </tr>
                    </table>
            
            <br/></td>
            </a>';
                }
                ?>
        </tr>

        <tr>
            <td><strong> Mail </strong> :<br/><br/> <?php echo $donnees['mail']; ?>
                <?php Modifier() ?><br/></td>
        </tr>

        <tr>
            <td><strong> Mot de Passe </strong> :<br/><br/> ******
                <?php Modifier() ?><br/></td>
        </tr>
    </table>
    </p>

    <?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>
</body>
</html>