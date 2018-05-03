<?php
/**
 * Created by IntelliJ IDEA.
 * User: Julien
 * Date: 23/04/2018
 * Time: 12:20
 */


function erreur($err='')

{

    $mess=($err!='')? $err:'Une erreur inconnue s\'est produite';

    exit('<p>'.$mess.'</p>

   <p>Cliquez <a href="index.php">ici</a> pour revenir à la page d\'accueil</p></div></body></html>');

}

?>


