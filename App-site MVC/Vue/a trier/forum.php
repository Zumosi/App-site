<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Forum</title>
    <link rel="stylesheet" href="css/forum.css"/>

</head>
<?php
include("Controleur/BDD.php");
include("Modèle/requete.topic.php")
?>

<body id="body">
<p class="titre">FORUM</p>
<p>
    <br>
    <br>
    <br>
    <br>
</p>


<?php
$date = date("d/m/Y");
Print("Date :  $date ");
?>
<p class="nouveautopic">
    <br>
    Cliquez sur le lien suivant pour créer un nouveau topic:<a class="newmess" href="index.php?cible=newmess"> Nouveau Topic</a>
</p>


<div class="tableau">
    <h2>Liste des topics : </h2>
<?php  listetopic() ?>
</div>

</body>
</html>


