<?php
session_start();
ini_set("display_errors",0);error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Forum</title>
    <link rel="stylesheet" href="css/forum.css"/>
    <?php
    include("../Controleur/BDD.php");
    ?>
</head>
<body>
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

for($i=0;$i<$_POST["taille"];$i++){
    if(($_POST["sujet$i"])!=NULL){
        $sujetchoisi= $i;
        $object = new Bdd;
        $requete = $object->connect()->prepare('SELECT id_user,commentaire,date_commentaire FROM message WHERE id_topic=:id_topic');
        $requete->execute(array(
            "id_topic"=>$i
        ));
        $tablecom = $requete->fetchAll();
    }
}

    echo "<table border='2'>";
    echo"<th>Auteur</th>";
    echo"<th >Titre</th>" ;
    echo"<th >Date</th>" ;
    $tailletable=sizeof($tablecom);
    for($i=0;$i<$tailletable;$i++) {
        $prenom=trouvernom($tablecom[$i]['id_user'])["prenom"];
        $nom=trouvernom($tablecom[$i]['id_user'])["nom"];
        $nom_prenom=$nom." ".$prenom;
        echo "<tr>";
        echo "<th>";
        echo $nom_prenom;
        echo "</th>";
        echo "<th>";
        print $tablecom[$i]['commentaire'] ;
        echo "</th>";
        echo "<th>";
        print $tablecom[$i]['date_commentaire'] ;
        echo "</th>";
        echo "</tr>";
    }


?>
<h1>FORUM</h1>
<h2>Sujet : <?php echo htmlspecialchars($_POST["sujet$sujetchoisi"]);?></h2>
    <form method="post" action = "ajoutcom.php" id="formulairecom" onsubmit="">
        <input type="hidden" name="idtopic" value="<?php echo htmlspecialchars($sujetchoisi);?>"/>
        <input type="submit" name="commentaire" value="Ajouter un commentaire">
    </form>
<?php
