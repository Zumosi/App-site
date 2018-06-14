<?php function recupjour($j)
{
    $bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
    $reponse = $bdd->prepare('SELECT DAY(date_crea) AS jour FROM topic WHERE id_topic=?');
    $reponse->execute(array($j));
    while ($donnees = $reponse->fetch()) {
        echo $donnees['jour'];
    }
    $reponse->closeCursor();
}

?>

<?php function recupmois($m)
{
    $bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
    $reponse = $bdd->prepare('SELECT MONTH (date_crea) AS mois FROM topic WHERE id_topic=?');
    $reponse->execute(array($m));
    while ($donnees = $reponse->fetch()) {
        if ($donnees['mois'] == 1) {
            echo 'Janvier';
        } else if ($donnees['mois'] == 2) {
            echo 'Février';
        } else if ($donnees['mois'] == 3) {
            echo 'Mars';
        } else if ($donnees['mois'] == 4) {
            echo 'Avril';
        } else if ($donnees['mois'] == 5) {
            echo 'Mai';
        } else if ($donnees['mois'] == 6) {
            echo 'Juin';
        } else if ($donnees['mois'] == 7) {
            echo 'Juillet';
        } else if ($donnees['mois'] == 8) {
            echo 'Août';
        } else if ($donnees['mois'] == 9) {
            echo 'Septembre';
        } else if ($donnees['mois'] == 10) {
            echo 'Octobre';
        } else if ($donnees['mois'] == 11) {
            echo 'Novembre';
        } else if ($donnees['mois'] == 12) {
            echo 'Decembre';
        }
    }
    $reponse->closeCursor();
}

?>

<?php function recupan($a)
{
    $bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
    $reponse = $bdd->prepare('SELECT YEAR (date_crea) AS an FROM topic WHERE id_topic=?');
    $reponse->execute(array($a));
    while ($donnees = $reponse->fetch()) {
        echo $donnees['an'];
    }
    $reponse->closeCursor();
}

?>


<?php function numtitretopic()
{
    $bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
    $reponse = $bdd->query('SELECT MAX(id_topic) AS maxid FROM topic');
    while ($donnees = $reponse->fetch()) {
        $numtopic = $donnees['maxid'];
    }
    $reponse->closeCursor();
    return $numtopic;
}

?>

<?php
function titretopic($numtopic)
{
    $bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
    $reponse = $bdd->prepare('SELECT * FROM topic WHERE id_topic = ?');
    $reponse->execute(array($numtopic));
    while ($donnees = $reponse->fetch()) {
        echo $donnees['titre'];
    }
    $reponse->closeCursor();
}

?>

<?php
function textmess($idtopic, $iduti)
{
    $bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
    $reponse = $bdd->prepare('SELECT * FROM message WHERE id_topic = ? AND id_user=?');
    $reponse->execute(array($idtopic, $iduti));
    while ($donnees = $reponse->fetch()) {
        $point = strpos($donnees['commentaire'], '.');
        echo substr($donnees['commentaire'], 0, $point + 1);
    }
    $reponse->closeCursor();
}

?>


<?php
function nomuti($idtopic)
{
    $bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
    $reponse = $bdd->prepare('SELECT * FROM topic WHERE id_topic = ?');
    $reponse->execute(array($idtopic));
    while ($donnees = $reponse->fetch()) {
        $iduti = $donnees['id_utilisateur'];
    }
    $reponse->closeCursor();
    return $iduti;
}

?>

<?php
function afficheuti($iduti)
{
    $bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
    $reponse = $bdd->prepare('SELECT * FROM utilisateur WHERE id_utilisateur = ?');
    $reponse->execute(array($iduti));
    while ($donnees = $reponse->fetch()) {
        echo $donnees['nom'];
        echo '   ';
        echo $donnees['prenom'];
    }
    $reponse->closeCursor();
}

?>

<?php
function blockmessage($id_top)
{
    $bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
    $reponse = $bdd->prepare('SELECT * FROM message WHERE id_topic = ?');
    $reponse->execute(array($id_top));
    while ($donnees = $reponse->fetch()) {

        for ($i = 0; $i <= strlen($donnees['commentaire']) - 1; $i++) {
            if ($donnees['commentaire'][$i] == '-') {
                echo '</br>';
            } else {
                echo $donnees['commentaire'][$i];
            }
        }

        echo '</br>';
        $req = $bdd->prepare('SELECT nom,prenom, id_user FROM utilisateur, message WHERE id_utilisateur=?');
        $req->execute(array($donnees['id_user']));
        while ($don = $req->fetch()) {
            echo $don['nom'];
            echo $don['prenom'];
            $req->closeCursor();
        }


        echo '</br>';
        echo $donnees['date_commentaire'];
        echo '</br>';

    }
    $reponse->closeCursor();
}

?>
<?php
function trouvernom($id_utilisateur)
{
    $object = new Bdd;
    $requete = $object->connect()->prepare('SELECT nom,prenom FROM utilisateur WHERE id_utilisateur=:id_utilisateur');
    $requete->execute(array(
        "id_utilisateur" => $id_utilisateur
    ));
    $tablenom = $requete->fetchAll();
    $tablenom = $tablenom[0];
    return $tablenom;

}

?>

<?php
function listetopic()
{
    $object = new Bdd;
    $requete = $object->connect()->prepare('SELECT titre,date_crea,id_utilisateur FROM topic');
    $requete->execute();
    $tabletopic = $requete->fetchAll();
    echo "<table class='tab' border='2'>";
    echo "<th>Auteur</th>";
    echo "<th class='titreTopic'>Titre</th>";
    echo "<th >Date</th>";
    echo '<form method="post" action = "index.php?cible=forumliste" id="formulairetopic" >';
    echo "<input type='hidden' name='taille' value='" . sizeof($tabletopic) . "'>";
    for ($i = 0; $i < sizeof($tabletopic); $i++) {
        $prenom = trouvernom($tabletopic[$i]['id_utilisateur'])["prenom"];
        $nom = trouvernom($tabletopic[$i]['id_utilisateur'])["nom"];
        $nom_prenom = $nom . " " . $prenom;
        echo "<tr>";
        echo "<th>";
        echo $nom_prenom;
        echo "</th>";
        echo "<th>";
        echo "<input type='submit' name='sujet$i' value='" . $tabletopic[$i]['titre'] . "'>";
        echo "</th>";
        echo "<th>";
        print $tabletopic[$i]['date_crea'];;
        echo "</th>";
        echo "</tr>";
    }
    echo '</form>';
    echo '</table>';
}

?>

<?php function listemessage()
{

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

    echo "<table class='tab2' border='2'>";
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

}
?>



