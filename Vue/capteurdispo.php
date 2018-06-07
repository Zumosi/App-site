<?php
include("../Controleur/BDD.php");

$_SESSION["id"]=8
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
$quantite = $_POST["quantite"];
$object = new Bdd;
$requete = $object->connect()->prepare('SELECT NombreCapteurInfrarouge FROM utilisateur WHERE id_utilisateur=:ID');
$requete->execute(array(
        "ID"=>$_SESSION["id"]
));
$quantitebdd = $requete->fetch();
$quantitetotale = $quantite + $quantitebdd[0];
$requete = $object->connect()->prepare('UPDATE utilisateur SET NombreCapteurInfrarouge=:quantitetotale WHERE id_utilisateur=:ID ');
$requete->execute(array(
    "quantitetotale"=>$quantitetotale,
    "ID"=>$_SESSION["id"]
));
$nomcapteur = $_POST["nomcapteur"];


?>
    <form action="formpiece.php" method="post" >
        <input type ="hidden" name="nomcapteur" value="<?php echo htmlspecialchars($nomcapteur); ?>"/>
        <input type="hidden" name="quantitetotale" value="<?php echo htmlspecialchars($quantitetotale); ?>"/>
        <input type="submit" name="send" value="Ajouter"/>
    </form>
<table id="facture" border="2">
    <tr><td>Nom du capteur</td>
        <td>Quantité Disponible</td>
        <td>Modifier</td>
    </tr>
    <tr>
        <td><?php echo htmlspecialchars($nomcapteur); ?></td>

        <td><?php echo htmlspecialchars($quantitetotale); ?></td>

        <td></td>
    </tr>
</table>

</section>
</body>