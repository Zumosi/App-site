<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="">
    <script src=""></script>
    <script src=""></script>
</head>
<body>
<h1>Envoie de mail</h1>
<h2>Ecrivez le contenu de votre mail</h2>

<form method='post' action='ajoutmailliste.php' id='formulairemail' onsubmit="<script>alert('votre mail a bien été envoyé')</script>">
    <input type='text' name='objetmail' id="objmail" placeholder="Objet Mail"/><br>
    <input type='text' name='msgmail' id="msgmail" placeholder="Contenu Mail"/><br>
    <input type='submit' name='commentaire' value='Envoyer un mail'/>
</form>


</body>
</html>
