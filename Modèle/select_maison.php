<?php
function select_maison($id)
{
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=atHome;charset=utf8', 'root', '');
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }

    $maison = $bdd->prepare("SELECT * FROM habitation WHERE id_user=:id");
    $maison->execute([
        ":id" => $id,
    ]);
    return $home = $maison->fetchAll();

}
?>
