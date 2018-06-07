<?php
include("../Controleur/BDD.php");
$object = new Bdd;
$etat = $_POST["etat"];
$id=1;
if($etat=="off"){
    $etat="on";
    $requete='UPDATE capteur SET etat=:newetat WHERE id_capteur=:ID';
    $requete = $object->connect()->prepare('UPDATE capteur SET etat=:etat WHERE id_capteur=:ID');
    $requete->execute(array("etat"=>$etat,
        "ID"=>$id));
    echo "Le capteur avec l'id" . $id . " a maintenant l'état : " . $etat;
    echo "yo";
}
else if($etat=="on"){
    $etat="off";
    $requete='UPDATE capteur SET etat=:newetat WHERE id_capteur=:ID';
    $requete = $object->connect()->prepare('UPDATE capteur SET etat=:etat WHERE id_capteur=:ID');
    $requete->execute(array("etat"=>$etat,
        "ID"=>$id));
    echo "Le capteur avec l'id" . $id . " a maintenant l'état : " . $etat;
    echo "tete";
}/*
if(isset($button)){
    if($etat=="off"){
    $etat="on";
    $requete='UPDATE capteur SET etat=:newetat WHERE id_capteur=:ID';
    $requete = $object->connect()->prepare('UPDATE capteur SET etat=:etat WHERE id_capteur=:ID');
    $requete->execute(array("etat"=>$etat,
        "ID"=>$id));
    echo "Le capteur avec l'id" . $id . " a maintenant l'état : " . $etat;
}
    else{$etat="off";
        $requete='UPDATE capteur SET etat=:newetat WHERE id_capteur=:ID';
        $requete = $object->connect()->prepare('UPDATE capteur SET etat=:etat WHERE id_capteur=:ID');
        $requete->execute(array("etat"=>$etat,
            "ID"=>$id));
        echo "Le capteur avec l'id" . $id . " a maintenant l'état : " . $etat;
    }
}*/
else{
    header("CapteurBdd.php");
}

?>