<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>validerpanier</title>
    <link rel="stylesheet" href="Vue/panier.css"/>
</head>
<body>
<table id="facture">
    <tr><td>Nom du capteur</td>
    <td>Prix unitaire</td>
    <td>Quantité</td>
    </tr>
    <tr>
        <td> </td>
        <td> </td>
        <td> </td>
    </tr>
</table>
<p id="prix">Prix total :</p>
<section>
    <form method="post" action="vue/liste.php">
        <input type="submit" name="retourshop" value="Continuer mes achats">
        <input type="submit" name="Validerpanier" value="Valider mon panier">
    </form>
</section>
</body>

