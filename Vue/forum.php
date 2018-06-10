<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Forum</title>
    <link rel="stylesheet" href="css/forum.css"/>
<<<<<<< HEAD
    <?php
    include("Controleur/BDD.php");
    //include("../Controleur/BDD.php");
    ?>
=======
>>>>>>> 730a70547140f084f3b58a1511bd807e6e1adab9
</head>
<?php
include("Controleur/BDD.php");
include("Modèle/requete.topic.php")
?>

<body>
<h1>FORUM</h1>
<a id="newmess" href="index.php?cible=newmess"> Nouveau Sujet</a>
<h2>Liste des sujets : </h2>

<?php  listetopic() ?>

</body>
</html>


