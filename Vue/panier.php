<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>validerpanier</title>
    <link rel="stylesheet" href="Vue/panier.css"/>
</head>
<body>
<?php
$quantite = $_POST["quantite"];
$nomcapteur = $_POST["nomcapteur"];
$prix = $_POST["prix"];
$prixtotal = $quantite*$prix;
?>
<table id="facture" border="2">
    <tr><td>Nom du capteur</td>
    <td>Prix unitaire</td>
    <td>Quantité</td>
    <td>Prix Total</td>
    </tr>
    <tr>
        <td> <?php echo htmlspecialchars($_POST["nomcapteur"]); ?></td>
        <td> <?php echo htmlspecialchars($_POST["prix"]); ?></td>
        <td> <?php echo htmlspecialchars($_POST["quantite"]); ?></td>
        <td> <?php echo htmlspecialchars(($prixtotal));?></td>
    </tr>
</table>

<section>
    <form method="post" action="capteurdispo.php">
        <input type="submit" name="retourshop" value="Continuer mes achats">
        <input type='hidden' name='nomcapteur' value="<?php echo htmlspecialchars($_POST["nomcapteur"]); ?>">
        <input type='hidden' name='quantite' value="<?php echo htmlspecialchars($_POST["quantite"]); ?>">
        <input type="submit" name="Validerpanier" value="Valider mon panier">
    </form>
</section>
</body>

