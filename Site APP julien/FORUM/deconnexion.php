<?php
/**
 * Created by IntelliJ IDEA.
 * User: Julien
 * Date: 24/04/2018
 * Time: 11:20
 */


session_start();

session_destroy();

$titre="Déconnexion";

include("debut.php");

include("menu.php");


if ($id==0) erreur(ERR_IS_NOT_CO);


echo '<p>Vous êtes à présent déconnecté <br />

Cliquez <a href="'.htmlspecialchars($_SERVER['HTTP_REFERER']).'">ici</a> 

pour revenir à la page précédente.<br />

Cliquez <a href="index.php">ici</a> pour revenir à la page principale</p>';

echo '</div></body></html>';

?>