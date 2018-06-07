
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css"  href="Vue/UtilisateurSecondaireForm.css"  />
    <title>Utilisateur Secondaire </title>
</head>
<body>

<h1>Voici vos utilisateurs Secondaires : </h1>


<?php
include_once("Controleur/BDD.php");
$object = new Bdd;
$requete = $object->connect()->prepare("SELECT nom,prenom FROM utilisateur WHERE num_principal=:ID");
$requete->execute(array("ID"=>$_SESSION["id"]));
$resultat = $requete->fetchAll();   ?>

<table id="tablesecondaire">
   <tr>
        <td>Nom</td>
        <td>Prénom</td>
    </tr>

    <?php for ($i = 0; $i < count($resultat); $i++) {  ?>
    <td align='center'>" . $resultat[$i]['nom'] . "</td>
    <td>" . $resultat[$i]['prenom'] . "</td>
    <tr/>

    <?php 

    }   ?>
    </table>


<section>
<form method="post" action = "Controleur/UtilisateurSecondaireListe.php" onsubmit="">
    <label>Ajouter un utilisateur secondaire : </label><input name = "nom" id="champs" type="text" placeholder="Texte" /> <br>
    <input type="submit" value="Ajouter"   />

</form>
</section>

</body>
</html>