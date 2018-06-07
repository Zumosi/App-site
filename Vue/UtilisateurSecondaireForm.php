<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <!--  <link rel="stylesheet" type="text/css"  href="" />
    <script type="text/javascript" src=""></script> -->
    <title>Utilisateur Secondaire </title>
</head>
<body>

<p>Voici vos utilisateurs Secondaires : </p>


<?php
include_once("Controleur/BDD.php");
 $object = new Bdd;
$requete = $object->connect()->prepare("SELECT nom,prenom FROM utilisateur WHERE num_principal=:ID");
$requete->execute(array("ID"=>$_SESSION["id"]));
$resultat = $requete->fetchAll();
echo '<table border="2" >
   <tr>
        <th>Nom</th>
        <th>Prénom</th>
    </tr>
    ';
    for ($i = 0; $i < count($resultat); $i++) {
    echo "<td align='center'>" . $resultat[$i]['nom'] . "</td>";
    echo "<td>" . $resultat[$i]['prenom'] . "</td>";
    echo "<tr/>";
    }
    echo '</table>';
?>

<form method="post" action = "Controleur/UtilisateurSecondaireListe.php" onsubmit="">
    <label>Ajouter un utilisateur secondaire : </label><input name = "nom" id="champs" type="text" placeholder="Texte" /> <br>
    <br><br>
    <input type="submit" value="Envoyer" />

</form>

</body>
</html>