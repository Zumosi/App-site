<?php

include("BDD.php");

$connexion = new Bdd;

$requete = $connexion->connect()->prepare("SELECT mail FROM utilisateur");

$email=$_POST['mail'];

echo $_POST['mail'];


$tablemail = $requete->execute();
$tablemail = $requete->fetchAll();

echo "<pre>";

print_r($tablemail);

echo "</pre>";

$unique = true;

for ($i = 0; $i < sizeof($tablemail); $i++) 
{

	if ($email == $tablemail[$i]['mail']) {

		$unique = false;
		echo "le mail n'est pas unique";
		return $unique;
	}

	else {

		echo "le mail est unique";
		return $unique;
	}

}



?>