<?php
include_once("Controleur/BDD.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="Vue/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <title>My Chart.js Chart</title>
</head>
<body>


<?php

function trouverdatesalon(){
    $object = new Bdd;
    $requetedate = $object->connect()->prepare('SELECT consommation_date FROM consommation_jour WHERE piece_name="salon" ');
    $requetedate->execute();
    $tabledatesalon = $requetedate->fetchAll();
    $datesalon=array();
    for ($i=0;$i<sizeof($tabledatesalon);$i++){
        array_push($datesalon,$tabledatesalon[$i]["consommation_date"]);
    }
/*  echo "<pre>";
print_r($date) ;
    echo "</pre>";*/
    return $datesalon;
}

function trouverdateSdB()
{
    $object = new Bdd;
    $requetedate = $object->connect()->prepare('SELECT consommation_date FROM consommation_jour WHERE piece_name="SdB" ');
    $requetedate->execute();
    $tabledateSdB= $requetedate->fetchAll();
    $dateSdB = array();
    for ($i = 0; $i < sizeof($tabledateSdB); $i++) {
        array_push($dateSdB, $tabledateSdB[$i]["consommation_date"]);
    }
    /*  echo "<pre>";
    print_r($date) ;
        echo "</pre>";*/
    return $dateSdB;
}

function trouverdatecuisine()
{
    $object = new Bdd;
    $requetedate = $object->connect()->prepare('SELECT consommation_date FROM consommation_jour WHERE piece_name="cuisine" ');
    $requetedate->execute();
    $tabledatecuisine = $requetedate->fetchAll();
    $datecuisine = array();
    for ($i = 0; $i < sizeof($tabledatecuisine); $i++) {
        array_push($datecuisine, $tabledatecuisine[$i]["consommation_date"]);
    }
    /*  echo "<pre>";
    print_r($date) ;
        echo "</pre>";*/
    return $datecuisine;
}

function trouverdateWC()
{
    $object = new Bdd;
    $requetedate = $object->connect()->prepare('SELECT consommation_date FROM consommation_jour WHERE piece_name="WC" ');
    $requetedate->execute();
    $tabledateWC = $requetedate->fetchAll();
    $dateWC = array();
    for ($i = 0; $i < sizeof($tabledateWC); $i++) {
        array_push($dateWC, $tabledateWC[$i]["consommation_date"]);
    }
    /*  echo "<pre>";
    print_r($date) ;
        echo "</pre>";*/
    return $dateWC;
}

function trouverdatechambre($id_piece)
{
    $object = new Bdd;
    //$requetedate = $object->connect()->prepare('SELECT consommation_date FROM consommation_jour WHERE piece_name="chambre" ');
    $requetedate = $object->connect()->prepare('SELECT consommation_date FROM consommation_jour WHERE piece_name="chambre" ');
    $requetedate->execute();
    $tabledatechambre = $requetedate->fetchAll();
    $datechambre = array();
    for ($i = 0; $i < sizeof($tabledatechambre); $i++) {
        array_push($datechambre, $tabledatechambre[$i]["consommation_date"]);
    }
    /*  echo "<pre>";
    print_r($date) ;
        echo "</pre>";*/
    return $datechambre;
}

function consoSalon()
{
    $object = new Bdd;
    $requete = $object->connect()->prepare('SELECT consommation_value FROM consommation_jour WHERE piece_name="salon" ');
    $requete->execute();
    $conso = $requete->fetchAll();
    $value=array();

   /* echo "<pre>";
    print_r($conso) ;
    echo "</pre>";*/
    for ($i=0;$i<sizeof($conso);$i++){
        array_push($value,$conso[$i]["consommation_value"]);
    }

    /*echo "<pre>";
    print_r($value) ;
    echo "</pre>";*/
    return $value;
}

function puissanceSalon()
{
    $object = new Bdd;
    $requete = $object->connect()->prepare('SELECT puissance_value FROM puissance_jour WHERE piece_name="salon" ');
    $requete->execute();
    $conso = $requete->fetchAll();
    $puissance=array();
    for ($i=0;$i<sizeof($conso);$i++){
        array_push($puissance,$conso[$i]["puissance_value"]);
    }
    return $puissance;
}

function consoChambre()
{
    $object = new Bdd;
    $requete = $object->connect()->prepare('SELECT consommation_value FROM consommation_jour WHERE piece_name="Chambre" ');
    $requete->execute();
    $conso = $requete->fetchAll();
    $value=array();
    for ($i=0;$i<sizeof($conso);$i++){
        array_push($value,$conso[$i]["consommation_value"]);
    }
    for ($i=0;$i<sizeof($conso);$i++){
        array_push($value,$conso[$i]["consommation_value"]);
    }
    return $value;
}

function puissanceChambre()
{
    $object = new Bdd;
    $requete = $object->connect()->prepare('SELECT puissance_value FROM puissance_jour WHERE piece_name="Chambre" ');
    $requete->execute();
    $conso = $requete->fetchAll();
    $puissance=array();
    for ($i=0;$i<sizeof($conso);$i++){
        array_push($puissance,$conso[$i]["puissance_value"]);
    }
    return $puissance;
}

function consoSdB()
{
    $object = new Bdd;
    $requete = $object->connect()->prepare('SELECT consommation_value FROM consommation_jour WHERE piece_name="sdb" ');
    $requete->execute();
    $conso = $requete->fetchAll();
    $value=array();
    for ($i=0;$i<sizeof($conso);$i++){
        array_push($value,$conso[$i]["consommation_value"]);
    }
    for ($i=0;$i<sizeof($conso);$i++){
        array_push($value,$conso[$i]["consommation_value"]);
    }
    return $value;
}

function puissanceSdB()
{
    $object = new Bdd;
    $requete = $object->connect()->prepare('SELECT puissance_value FROM puissance_jour WHERE piece_name="sdb" ');
    $requete->execute();
    $conso = $requete->fetchAll();
    $puissance=array();
    for ($i=0;$i<sizeof($conso);$i++){
        array_push($puissance,$conso[$i]["puissance_value"]);
    }
    return $puissance;
}

function consoCuisine()
{
    $object = new Bdd;
    $requete = $object->connect()->prepare('SELECT consommation_value FROM consommation_jour WHERE piece_name="Cuisine" ');
    $requete->execute();
    $conso = $requete->fetchAll();
    $value=array();
    for ($i=0;$i<sizeof($conso);$i++){
        array_push($value,$conso[$i]["consommation_value"]);
    }
    for ($i=0;$i<sizeof($conso);$i++){
        array_push($value,$conso[$i]["consommation_value"]);
    }
    return $value;
}

function puissanceCuisine()
{
    $object = new Bdd;
    $requete = $object->connect()->prepare('SELECT puissance_value FROM puissance_jour WHERE piece_name="Cuisine" ');
    $requete->execute();
    $conso = $requete->fetchAll();
    $puissance=array();
    for ($i=0;$i<sizeof($conso);$i++){
        array_push($puissance,$conso[$i]["puissance_value"]);
    }
    return $puissance;
}

function consoWC()
{
    $object = new Bdd;
    $requete = $object->connect()->prepare('SELECT consommation_value FROM consommation_jour WHERE piece_name="WC" ');
    $requete->execute();
    $conso = $requete->fetchAll();
    $value=array();
    for ($i=0;$i<sizeof($conso);$i++){
        array_push($value,$conso[$i]["consommation_value"]);
    }
    for ($i=0;$i<sizeof($conso);$i++){
        array_push($value,$conso[$i]["consommation_value"]);
    }
    return $value;
}

function puissanceWC()
{
    $object = new Bdd;
    $requete = $object->connect()->prepare('SELECT puissance_value FROM puissance_jour WHERE piece_name="WC" ');
    $requete->execute();
    $conso = $requete->fetchAll();
    $puissance=array();
    for ($i=0;$i<sizeof($conso);$i++){
        array_push($puissance,$conso[$i]["puissance_value"]);
    }
    return $puissance;
}

?>

<?php
$consoWC = consoWC();
$puissanceWC = puissanceWC();
$consoCuisine = consoCuisine();
$puissanceCuisine = puissanceCuisine();
$consoSdB = consoSdB();
$puissanceSdB = puissanceSdB();
$consoSalon = consoSalon();
$puissanceSalon = puissanceSalon();
$consoChambre = consoChambre();
$puissanceChambre = puissanceChambre();
$datesalon = trouverdatesalon();
$datechambre = trouverdatechambre();
$datecuisine = trouverdatecuisine();
$dateWC = trouverdateWC();
$dateSdB = trouverdateSdB();

echo '<script>';
echo 'var consoWC = ' .json_encode($consoWC) . ';';
echo 'var puissanceWC = ' .json_encode($puissanceWC) . ';';
echo 'var consoCuisine = ' .json_encode($consoCuisine) . ';';
echo 'var puissanceCuisine = ' .json_encode($puissanceCuisine) . ';';
echo 'var consoSdB = ' .json_encode($consoSdB) . ';';
echo 'var puissanceSdB = ' .json_encode($puissanceSdB) . ';';
echo 'var consoSalon = ' .json_encode($consoSalon) . ';';
echo 'var puissanceSalon = ' .json_encode($puissanceSalon) . ';';
echo 'var consoChambre = ' .json_encode($consoChambre) . ';';
echo 'var puissanceChambre = ' .json_encode($puissanceChambre) . ';';
echo 'var datesalon= ' .json_encode($datesalon) . ';';
echo 'var datechambre= ' .json_encode($datechambre) . ';';
echo 'var datecuisine= ' .json_encode($datecuisine) . ';';
echo 'var dateWC= ' .json_encode($dateWC) . ';';
echo 'var dateSdB= ' .json_encode($dateSdB) . ';';
echo '</script>';

?>


</body>
</html>

