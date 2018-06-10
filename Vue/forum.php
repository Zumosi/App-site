<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Forum</title>
    <link rel="stylesheet" href="css/forum.css"/>
    <?php
    include("Controleur/BDD.php");
    //include("../Controleur/BDD.php");
    ?>
</head>
<body>
<h1>FORUM</h1>
<h2>Liste des sujets : </h2>
<?php


function trouvernom($id_utilisateur)
{
    $object = new Bdd;
    $requete = $object->connect()->prepare('SELECT nom,prenom FROM utilisateur WHERE id_utilisateur=:id_utilisateur');
    $requete->execute(array(
            "id_utilisateur"=>$id_utilisateur
    ));
    $tablenom = $requete->fetchAll();
    $tablenom=$tablenom[0];
    return  $tablenom;

}
$object = new Bdd;
$requete = $object->connect()->prepare('SELECT titre,date_crea,id_utilisateur FROM topic');
$requete->execute();
$tabletopic=$requete->fetchAll();
echo "<table border='2'>";
echo"<th>Auteur</th>";
echo"<th >Titre</th>" ;
echo"<th >Date</th>" ;
echo'<form method="post" action = "forumliste.php" id="formulairetopic" >';
echo "<input type='hidden' name='taille' value='".sizeof($tabletopic)."'>";
for($i=0;$i<sizeof($tabletopic);$i++) {
    $prenom=trouvernom($tabletopic[$i]['id_utilisateur'])["prenom"];
    $nom=trouvernom($tabletopic[$i]['id_utilisateur'])["nom"];
    $nom_prenom=$nom." ".$prenom;
    echo "<tr>";
    echo "<th>";
    echo $nom_prenom;
    echo "</th>";
    echo "<th>";
    echo "<input type='submit' name='sujet$i' value='".$tabletopic[$i]['titre']."'>";
    echo "</th>";
    echo "<th>";
    print $tabletopic[$i]['date_crea'] ; ;
    echo "</th>";
    echo "</tr>";
}
echo'</form>';
?>
</body>
</html>


