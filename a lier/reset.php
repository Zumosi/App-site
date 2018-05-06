<?php
session_start();
$_SESSION['message'] = '';
$mysqli = new mysqli("localhost", "root", "root", "accounts_complete");

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) { 
if( isset($_GET['email']) && !empty($_GET['email']))
{
    $email = $mysqli->escape_string($_GET['email']); 

    $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");

    if ( $result->num_rows == 0 )
    { 
        $_SESSION['message'] = "Vous avez entré un mauvais URL";
    } 
}

else {
    $_SESSION['message'] = "Désolé, l'autenthification a échoué!";  
}
}


?>

