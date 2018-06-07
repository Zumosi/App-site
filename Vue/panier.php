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
        <td> Infrarouge</td>
        <td> 0,65</td>
        <td> 1</td>
    </tr>
</table>
<p id="prix">Prix total : 0,65€</p>
<section>
    <form method="post" action="vue/capteurdispo.php">
        <input type="submit" name="retourshop" value="Continuer mes achats">
        <input type="submit" name="Validerpanier" value="Valider mon panier">
    </form>
</section>
</body>

