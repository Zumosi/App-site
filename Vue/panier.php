<?php
$_SESSION["quantite"]=$_GET["quantite"];
$_SESSION["prix"]=$_GET["prix"];
include("Controleur/BDD.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>validerpanier</title>
    <link rel="stylesheet" href="Vue/panier.css"/>
</head>
<body>

<?php
$object = new Bdd;
$requete = $object->connect()->prepare('SELECT stock FROM boutique WHERE prix=:prixcapteur ');
$requete->execute(array(
    "prixcapteur"=>$_SESSION["prix"]));
$stockactuel=$requete->fetch();
$stockactuel=$stockactuel[0];
$stockreel=$stockactuel-$_SESSION["quantite"];
$requete = $object->connect()->prepare('UPDATE boutique SET stock=:newstock WHERE prix=:prixcapteur ');
$requete->execute(array("newstock"=>$stockreel,
    "prixcapteur"=>$_SESSION["prix"]));

$prixtotal = $_SESSION["quantite"]*$_SESSION["prix"];
?>

<table id="facture" border="2">
    <tr><td>Nom du capteur</td>
    <td>Prix unitaire</td>
    <td>Quantité</td>
    <td>Prix Total</td>
    </tr>
    <tr>
        <td> <?php echo htmlspecialchars($_SESSION["nomcapteur"]); ?></td>
        <td> <?php echo htmlspecialchars($_SESSION["prix"]); ?></td>
        <td> <?php echo htmlspecialchars($_SESSION["quantite"]); ?></td>
        <td> <?php echo htmlspecialchars(($prixtotal));?></td>
    </tr>
</table>

<section>
    <form method="post" action="capteurdispo.php">
        <input type="submit" name="retourshop" value="Continuer mes achats">
        <input type='hidden' name='quantite' value="<?php echo htmlspecialchars($_SESSION["quantite"]); ?>">
        <input type="submit" name="Validerpanier" value="Valider mon panier">
    </form>
</section>
</body>

