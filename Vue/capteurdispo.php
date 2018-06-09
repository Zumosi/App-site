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


<?php $idcapt = idcapteur($_SESSION["nomcapteur"]) ?>
<?php insertstock($idcapt, $_SESSION['quantite']) ?>


<form action="Vue/traitement.php" method="post">
    <input type="hidden" name="quantitetotale" value="<?php echo htmlspecialchars($quantitetotale); ?>"/>


    <table id="facture" border="2">
        <tr>
            <td>Nom du capteur</td>
            <td>Quantité Disponible</td>
            <td>Modifier</td>
        </tr>

<?php  tablestockuser($_SESSION['id']) ?>

    </table>
</form>


</body>