<?php
include("Controleur/BDD.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Forum</title>
    <link rel="stylesheet" href="css/forum.css"/>

</head>
<body>
<form method="post" action = "index.php?cible=ajoutcomliste" id="formulairecom" onsubmit="">
    <input type="hidden" name="idtopic" value="<?php echo htmlspecialchars($_POST["idtopic"])?>"/>
    <input type="text" name="commentaire" placeholder="commentaire">
    <input type="submit" name="envoyer" value="Envoyer le commentaire">

</form>
