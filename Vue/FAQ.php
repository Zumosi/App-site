<!DOCTYPE html>
<?php
include("Controleur/BDD.php");
?>
<html>
    <head>
        <title>FAQ</title>
        <link rel="stylesheet" type="text/css" href="css/FAQ.css">
        <script src="Vue/jquery-3.3.1.min.js"></script>
        <script src="Vue/FAQ.js"></script>
    </head>
    <body>
    <?php
    $object= new bdd;
    $requete = $object->connect()->prepare('SELECT titre,reponse,auteur FROM faq');
    $requete->execute();
    $tablefaq=$requete->fetchAll();
    echo "<h1 > Foire aux Questions </h1 >";
    echo "<table border='2'>";
    echo"<th>Auteur</th>";
    echo"<th>Titre</th>";
    echo"<th >Commentaire</th>" ;
    echo"<th >Date</th>" ;
    for($i=0;$i<sizeof($tablefaq);$i++) {
        echo "<tr>";
        echo "<th>";
        print $tablefaq[$i]['auteur'] ; ;
     echo "</th>";
        echo "<th>";
        print $tablefaq[$i]['titre'] ; ;
        echo "</th>";
        echo "<th>";
        print $tablefaq[$i]['reponse'] ; ;
        echo "</th>";
        echo "</tr>";
        }
?>
	</body>
</html>
