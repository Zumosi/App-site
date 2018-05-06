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

        for ($i = 0; $i <= strlen($donnees['commentaire'])-1; $i++){
            if ($donnees['commentaire'][$i] == '-') {
                echo '</br>';
            }
            else{
                echo $donnees['commentaire'][$i];
            }
        }
        echo '</br>';
        echo $donnees['id_user'];
        echo '</br>';
        echo $donnees['date_commentaire'];
        echo '</br>';

    }
    $reponse->closeCursor();
}

?>






