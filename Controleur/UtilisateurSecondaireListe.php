<?php
session_start();
?>
<?php

include_once("BDD.php");
//include("Securisation.php");


if($_POST["nom"]!=""){
    $mail = $_POST["nom"];
   // $name = securisation ($name);

    $object = new Bdd;
    $requete = $object->connect()->prepare('SELECT id_utilisateur FROM utilisateur WHERE id_utilisateur=:ID ');
    $requete->execute(array("ID"=>$_SESSION["id"]));
    $newnum = $requete->fetch();
    $requete = $object->connect()->prepare('UPDATE utilisateur SET num_principal=:newnum WHERE mail=:mail ');
    $requete->execute(array("newnum"=>$newnum["id_utilisateur"],
        "mail"=>$mail));
    $requetetype = $object->connect()->prepare('UPDATE utilisateur SET type="secondaire" WHERE mail=:mail ');
    $requetetype->execute(array("mail"=>$mail));
    echo "Vous avez bien ajouté " .$mail. " comme utilisateur secondaire";

/*
    $jointure = "SELECT groupe.nom,concert.prix,concert.date_concert
    FROM groupe
    INNER JOIN concert
    ON groupe.id = concert.groupe_id
    ORDER BY date_concert ASC";


    $requete2 = $connexion->prepare($jointure);
    $requete2->execute();
    $resultat=$requete2->fetchAll();


    echo'<table border="2">
        <tr>
            <th>Groupe</th>
            <th>Prix Concert</th>
            <th>Date Concert</th>
        </tr>
        ';

    for($i=0; $i<count($resultat);$i++) {
        echo "<td align='center'>" .$resultat[$i]['nom']. "</td>";
        echo "<td>" .$resultat[$i]['prix']. "</td>";
        echo "<td>" .$resultat[$i]['date_concert']. "</td>";
        echo "<tr/>";
    }
    echo '</table>';
}
*/

}








