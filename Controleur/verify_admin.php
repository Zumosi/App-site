<?php
require ("./Modèle/login.php");


function verify_admin($email){
    $user=verify_User($email);
    if($user['type']!=admin){
        $_SESSION['message']="vous n'avez pas accés à cette page désolé";
        return false;
    }
    else{
        return true;
    }
}