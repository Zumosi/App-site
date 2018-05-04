<?php
/**
 * Created by IntelliJ IDEA.
 * User: Julien
 * Date: 04/05/2018
 * Time: 15:00
 */






?>



<?php
function consopuissance($im)
{
    $bdd= new PDO('mysql:host=localhost;dbname=athome;charset=utf8',"root","");
$conso=$bdd->prepare('SELECT * FROM boutique WHERE id_boutique= ?');
$conso->execute(array($im));
//$puissance=$bdd-->prepare('SELECT puissance_value FROM puissance_jour WHERE date=CURRENT_DATE()');
while($donnees = $conso->fetch()) {
    echo 'consommation : <strong>' . $donnees['stock'] . '</strong><br/>';
    echo $donnees['stock'];
}
}

//echo 'puissance : <strong>' . $puissance . '</strong><br/>';
?>


