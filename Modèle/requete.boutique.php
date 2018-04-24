<?php
function textshop($im)
{
    $bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
    $reponse = $bdd->prepare('SELECT * FROM boutique WHERE id_boutique = ?');
    $reponse->execute(array($im));
    while ($donnees = $reponse->fetch()) {
        echo $donnees['description'];
    }
    $reponse->closeCursor();
}

?>
<?php
function titreshop($im)
{
    $bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
    $reponse = $bdd->prepare('SELECT * FROM boutique WHERE id_boutique = ?');
    $reponse->execute(array($im));
    while ($donnees = $reponse->fetch()) {
        echo $donnees['nom'];
    }
    $reponse->closeCursor();
}

?>


<?php function i()
{
    $bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
    $reponse = $bdd->query('SELECT MAX(id_boutique) AS maxprix FROM boutique');
    while ($donnees = $reponse->fetch()) {
        $i = $donnees['maxprix'];
    }
    $reponse->closeCursor();
    return $i;
}

?>

<?php
function prix($im)
{
    $bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
    $reponse = $bdd->prepare('SELECT * FROM boutique WHERE id_boutique = ?');
    $reponse->execute(array($im));
    while ($donnees = $reponse->fetch()) {
        echo $donnees['prix'] . ' €';
    }
    $reponse->closeCursor();
}

?>

<?php
function quanti($im)
{
    $bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
    $reponse = $bdd->prepare('SELECT * FROM boutique WHERE id_boutique = ?');
    $reponse->execute(array($im));
    while ($donnees = $reponse->fetch()) {
        echo $donnees['stock'];
    }
    $reponse->closeCursor();
}

?>

<?php function q($im)
{
    $bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
    $reponse = $bdd->prepare('SELECT stock FROM boutique WHERE id_boutique = ?');
    $reponse->execute(array($im));
    while ($donnees = $reponse->fetch()) {
        $q= $donnees['stock'];
    }
    $reponse->closeCursor();
    return $q;
}

?>


<?php
function choix2($q)
{
    if (5<= $q ) {
        echo '<option value="choix2"> 5</option>';
    }
}

?>

<?php
function choix3($q)
{
    if (10 <= $q) {
        echo '<option value="choix3"> 10</option>';
    }
}

?>

