<?php function prixtotal($prix, $quantité)
{
    $object = new Bdd;
    $requete = $object->connect()->prepare('SELECT stock FROM boutique WHERE prix=:prixcapteur ');
    $requete->execute(array(
        "prixcapteur" => $prix));
    $stockactuel = $requete->fetch();
    $stockactuel = $stockactuel[0];
    $stockreel = $stockactuel - $quantité;
    $requete = $object->connect()->prepare('UPDATE boutique SET stock=:newstock WHERE prix=:prixcapteur ');
    $requete->execute(array("newstock" => $stockreel,
        "prixcapteur" => $prix));

    return $prixtotal = floatval($quantité) * floatval($prix);
}

?>

<?php function typecapteur($nomcapt)
{
    $bdd = new Bdd();
    $reponse = $bdd->connect()->prepare('SELECT typeb FROM boutique WHERE nom = ?');
    $reponse->execute(array($nomcapt));
    while ($donnees = $reponse->fetch()) {
        return $donnees['typeb'];
    }
}

?>




<?php function listepiece($id)
{
    $bdd = new Bdd();
    $reponse = $bdd->connect()->prepare('SELECT nom FROM piece INNER JOIN habitation ON piece.id_maison=habitation.id_habitation WHERE habitation.id_user=?');
    $reponse->execute(array($id));
    while ($donnees = $reponse->fetch()) {
        echo '<option name="piece" >' . $donnees['nom'] . '</option>' . '</br>';
    }
}

?>

<?php function insertstock($idcapt, $nbquanti)
{
    $bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
    $reponse = $bdd->prepare('INSERT INTO stockuser( id_captacheter,id_acheteur,id_quantite) VALUES (:captacheter, :acheteur, :quantite)');
    $reponse->execute(array(
        'captacheter' => $idcapt,
        'acheteur' => $_SESSION['id'],
        'quantite' => $nbquanti,
    ));
    $reponse->closeCursor();
}

?>

<?php function idcapteur($nomcapt)
{
    $bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
    $req = $bdd->prepare('SELECT id_boutique FROM boutique WHERE nom=? ');
    $req->execute(array($nomcapt));
    while ($donnees = $req->fetch()) {
        $idcapt = $donnees['id_boutique'];
        return $idcapt;
    }
} ?>


<?php function tablestockuser($idsession)
{
    $bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
    $req = $bdd->prepare('SELECT nom,id_quantite,id_stock FROM boutique INNER JOIN stockuser ON stockuser.id_captacheter=boutique.id_boutique WHERE id_acheteur=? ');
    $req->execute(array($idsession));
    while ($donnees = $req->fetch()) {
        echo '<tr>' .
            '<td>' . $donnees['nom'] . '</td>' .
            '<td>' . $donnees['id_quantite'] . '</td>' .
            '<td>' . '<input type="submit"  name="send" value='.$donnees['id_stock'].'>' . '</td>' .
            '</tr>';
    }
}

?>

<?php function idpiece($nompiece){
    $bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
    $reponse = $bdd->prepare('SELECT id_piece FROM piece WHERE nom=?');
    $reponse->execute(array($nompiece));
    while ($donnees = $reponse->fetch()) {
        $idpiece=$donnees['id_piece'];
        return $idpiece;
    }
}
?>

<?php function ajoutcapteur()
{
    $type = typecapteur($_SESSION['nomcapteur']);
    $bdd = new Bdd;
    $req = $bdd->connect()->prepare('INSERT INTO capteur(type,reference,etat,id_place) VALUES (:type,:nom,:etat,:idplace)');
    $req->execute(array(
        'type' => $type,
        'nom' => $_SESSION['nomcapteur'],
        'etat' => 'off',
        'idplace' => $_GET['idpiece'],
    ));
    $reponse=$bdd->connect()->prepare('UPDATE stockuser SET id_quantite=id_quantité-1 WHERE id_stock=?');
    $reponse->execute(array());
}
?>

