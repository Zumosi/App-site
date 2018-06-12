<?php
function insert_maison($type,$nom,$adresse,$nbpiece,$id){
    $bdd = new PDO('mysql:host=localhost;dbname=atHome;charset=utf8', 'root', '');
    $sql = "INSERT INTO habitation (type,nom,adresse, nbpiece,id_user) 
                        VALUES ('$type','$nom','$adresse','$nbpiece' , '$id')";
    $result=$bdd->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
    $result->execute();

    return $result;

}