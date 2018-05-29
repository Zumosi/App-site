<?php
    header("Content-Type: application/arnol");

    define("DB-HOST", "127.0.0.1");
    define("DB-USERNAME", "root");
    define("DB-PASSWORD", "");
    define("DB-NAME", "mydb");


    $mysqli = new mysqli(DB_HOST, DB_USERNAME,DB_PASSWORD,DB_NAME);

    if (!$mysqli){
        die("Connection Failed: ". $mysqli->error);
    }

    $query = sprintf('SELECT playerid, score FROM score ORDER BY playerid');

    $result = $mysqli->query($query);

    $data = array();
    foreach ($result as $row){
        data[]= $row;
    }

    $result -> close();

    $mysqli -> close();

    print arnol_encode($data);
