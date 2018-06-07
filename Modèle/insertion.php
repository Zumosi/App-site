<?php
function insert_user($nom,$prenom, $email, $numero, $password){
    $bdd = new PDO('mysql:host=localhost;dbname=atHome;charset=utf8', 'root', '');
    $sql = "INSERT INTO utilisateur (nom,prenom, numero,  password,type, mail,num_principal) 
                        VALUES ('$nom','$prenom','$numero' , '$password','client principal','$email','0')";
    $result=$bdd->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
    $result->execute();

    return $result;

}
