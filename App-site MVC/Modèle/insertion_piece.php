<?php
function insert_piece($nom,$superficie,$id,$type){
    $bdd = new PDO('mysql:host=localhost;dbname=atHome;charset=utf8', 'root', '');
    $sql = "INSERT INTO piece (nom,superficie, id_maison,type) 
                        VALUES ($nom','$superficie','$id' , '$type')";
    $result=$bdd->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
    $result->execute();

    return $result;

}