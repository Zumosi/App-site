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
<h1>FORUM</h1>

<a id="newmess" href="index.php?cible=newmess"> Nouveau Sujet</a>
<<<<<<< HEAD
<h2>Liste des sujets :<?php  listetopic() ?> </h2>
=======
<?php
$date = date("d/m/Y");
Print("Date :  $date ");
?>
<h2>Liste des sujets : </h2>

<?php  listetopic() ?>
>>>>>>> d4763be16d0e1e1c0b0068b1efdf7bcb61af7904

</body>
</html>


