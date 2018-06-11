<?php
ini_set("display_errors", 0);
error_reporting(0);
?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8"/>
        <title>Forum</title>
        <link rel="stylesheet" href="css/forum.css"/>
        <?php
        include("Controleur/BDD.php");
        include("Modèle/requete.topic.php")
        ?>
    </head>
<body>




<<<<<<< HEAD
    <h1>FORUM</h1>

    <?php
    for ($i = 0; $i < $_POST["taille"]; $i++) {
        if (($_POST["sujet$i"]) != NULL) {
            $sujetchoisi = $i;
            $object = new Bdd;
            $requete = $object->connect()->prepare('SELECT id_user,commentaire,date_commentaire FROM message WHERE id_topic=:id_topic');
            $requete->execute(array(
                "id_topic" => $i
            ));
            $tablecom = $requete->fetchAll();
        }
    }
    echo '<h2>'. 'Sujet :' . htmlspecialchars($_POST["sujet$sujetchoisi"]). '</h2>';
    echo "<table border='2'>";
    echo "<th>Auteur</th>";
    echo "<th >Titre</th>";
    echo "<th >Date</th>";
    $tailletable = sizeof($tablecom);
    for ($i = 0; $i < $tailletable; $i++) {
        $prenom = trouvernom($tablecom[$i]['id_user'])["prenom"];
        $nom = trouvernom($tablecom[$i]['id_user'])["nom"];
        $nom_prenom = $nom . " " . $prenom;
        echo "<tr>";
        echo "<th>";
        echo $nom_prenom;
        echo "</th>";
        echo "<th>";
        print $tablecom[$i]['commentaire'];
        echo "</th>";
        echo "<th>";
        print $tablecom[$i]['date_commentaire'];
        echo "</th>";
        echo "</tr>";
    }
    echo '</table>';
    ?>
=======
    <p class="titre">FORUM</p>
    <p>
        <br>
        <br>
        <br>
        <br>
    </p>
    <h2>Sujet : <?php echo htmlspecialchars($_POST["sujet$sujetchoisi"]); ?></h2>
>>>>>>> 9916abfb383dc37662878bc3f4cca7654e69af16


    <form method="post" action="index.php?cible=ajoutcom" id="formulairecom" onsubmit="">
        <input type="hidden" name="idtopic" value="<?php echo htmlspecialchars($sujetchoisi); ?>"/>
        <input type="submit" name="commentaire" value="Ajouter un commentaire">
    </form>

<<<<<<< HEAD
=======
<?php
for ($i = 0; $i < $_POST["taille"]; $i++) {
    if (($_POST["sujet$i"]) != NULL) {
        $sujetchoisi = $i;
        $object = new Bdd;
        $requete = $object->connect()->prepare('SELECT id_user,commentaire,date_commentaire FROM message WHERE id_topic=:id_topic');
        $requete->execute(array(
            "id_topic" => $i
        ));
        $tablecom = $requete->fetchAll();
    }
}
echo "<table class='tableau' border='2'>";
echo "<th >Auteur</th>";
echo "<th >Topic</th>";
echo "<th >Date</th>";
$tailletable = sizeof($tablecom);
for ($i = 0; $i < $tailletable; $i++) {
    $prenom = trouvernom($tablecom[$i]['id_user'])["prenom"];
    $nom = trouvernom($tablecom[$i]['id_user'])["nom"];
    $nom_prenom = $nom . " " . $prenom;
    echo "<tr>";
    echo "<th>";
    echo $nom_prenom;
    echo "</th>";
    echo "<th>";
    print $tablecom[$i]['commentaire'];
    echo "</th>";
    echo "<th>";
    print $tablecom[$i]['date_commentaire'];
    echo "</th>";
    echo "</tr>";
}
echo '</table>';
?>
>>>>>>> 9916abfb383dc37662878bc3f4cca7654e69af16
