<?php
    $server = "localhost";
    $login = "root";
    $pass = "";

try {
$connexion=new PDO("mysql:host=$server;dbname=athome", $login, $pass);
$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connexion à la base de données réussie";
}

catch(PDOException $e){
    echo "Echec de la connexion : " .$e->getMessage();
}

