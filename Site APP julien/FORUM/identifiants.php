<?php
/**
 * Created by IntelliJ IDEA.
 * User: Julien
 * Date: 24/04/2018
 * Time: 11:20
 */


try

{

$db = new PDO('mysql:host=localhost;dbname=forum', 'root', '');

}

catch (Exception $e)

{

        die('Erreur : ' . $e->getMessage());

}

?>

