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

<body>
<h1>FORUM</h1>
<h2>Liste des sujets : </h2>

<?php  listetopic() ?>

</body>
</html>


