<?php
include("Controleur/BDD.php");
include("Modèle/requete.panier.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Valider Panier</title>
    <link rel="stylesheet" href="css/panier.css"/>
</head>
<body>

<?php ajoutinfra($_SESSION['quantite']) ?>


<form action="Vue/traitement.php" method="post">
    <input type="hidden" name="quantitetotale" value="<?php echo htmlspecialchars($quantitetotale); ?>"/>


        <table id="facture" border="2">
            <tr>
                <td>Nom du capteur</td>
                <td>Quantité Disponible</td>
                <td>Modifier</td>
            </tr>
            <tr>
                <td><?php echo htmlspecialchars($_SESSION["nomcapteur"]); ?></td>

                <td><?php echo htmlspecialchars($_SESSION["quantitetotale"]); ?></td>

                <td><input type="submit" name="send" value="Ajouter"/></td>
            </tr>
        </table>
</form>


</body>