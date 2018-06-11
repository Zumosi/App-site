<?php
$_SESSION["quantite"] = $_GET["quantite"];
$_SESSION["prix"] = $_GET["prix"];
include("Controleur/BDD.php");
include("Modèle/requete.panier.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>validerpanier</title>
    <link rel="stylesheet" href="css/panier.css"/>
</head>
<?php $prixtotal=prixtotal($_SESSION["prix"],$_SESSION["quantite"])?>
<body>


<table id="facture" border="2">
    <tr>
        <td>Nom du capteur</td>
        <td>Prix unitaire</td>
        <td>Quantité</td>
        <td>Prix Total</td>
    </tr>
    <tr>
        <td> <?php echo htmlspecialchars($_SESSION["nomcapteur"]); ?></td>
        <td> <?php echo htmlspecialchars($_SESSION["prix"]); ?></td>
        <td> <?php echo htmlspecialchars($_SESSION["quantite"]); ?></td>
        <td> <?php echo htmlspecialchars(($prixtotal)); ?></td>
    </tr>
</table>

<section>
    <form method="post" action="vue/traitement.php">
        <input type="submit" name="retourshop" value="Continuer mes achats">
        <input type='hidden' name='quantite' value="<?php echo htmlspecialchars($_SESSION["quantite"]); ?>">
        <input type="submit" name="Validerpanier" value="Valider mon panier">
    </form>
</section>
</body>

