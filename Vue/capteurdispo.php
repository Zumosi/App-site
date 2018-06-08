<?php
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
$quantite = $_SESSION["quantite"];
$object = new Bdd;
$requete = $object->connect()->prepare('SELECT NombreCapteurInfrarouge FROM utilisateur WHERE id_utilisateur=:ID');
$requete->execute(array(
        "ID"=>$_SESSION["id"]
));
$quantitebdd = $requete->fetch();
if($_SESSION["ajout"]==true){
    $_SESSION["quantitetotale"] = $quantite + $quantitebdd[0];
    $_SESSION["ajout"]=false;
}
$requete = $object->connect()->prepare('UPDATE utilisateur SET NombreCapteurInfrarouge=:quantitetotale WHERE id_utilisateur=:ID ');
$requete->execute(array(
    "quantitetotale"=>$_SESSION["quantitetotale"],
    "ID"=>$_SESSION["id"]
));


?>
    <form action="Vue/traitement.php" method="post" >
        <input type="hidden" name="quantitetotale" value="<?php echo htmlspecialchars($quantitetotale); ?>"/>


<table id="facture" border="2">
    <tr><td>Nom du capteur</td>
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

</section>
</body>