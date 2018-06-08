<?php
include("..\Controleur\BDD.php");
// RECUPERATION
$tableautraduit=array();
function recuperation()
{
    $ch = curl_init();
    curl_setopt(
        $ch,
        CURLOPT_URL,
        "http://projets-tomcat.isep.fr:8080/appService?ACTION=GETLOG&TEAM=G10C");
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $data = curl_exec($ch);
    curl_close($ch);
    echo "Raw Data:<br />";
    echo("$data");
    return $data;
}

// FORME DE TABLEAU

function formetableau($data)
{
    $data_tab = str_split($data, 33);
    echo "<pre>";
    print_r ($data_tab);
    echo "</pre>";
    echo "Tabular Data:<br />";
    for ($i = 0, $size = count($data_tab); $i < $size; $i++) {
        echo "Trame $i: $data_tab[$i]<br />";
    }
    return $data_tab;
}
//  DECODAGE

function decodage($data_tab)
{
    $trame = $data_tab[0];
// décodage avec des substring
    $t = substr($trame, 0, 1);
    $o = substr($trame, 1, 4);
// …
// décodage avec sscanf
    list($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) =
        sscanf($trame, "%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");
    echo("<br />$t,$o,$r,$c,$n,$v,$a,$x,$year,$month,$day,$hour,$min,$sec<br/>");

    $tableautraduit[0]=$t;
    $tableautraduit[1]=$o;
    $tableautraduit[2]=$r;
    $tableautraduit[3]=$c;
    $tableautraduit[4]=$n;
    $tableautraduit[5]=$v;
    $tableautraduit[6]=$a;
    $tableautraduit[7]=$x;
    $tableautraduit[8]=$year;
    $tableautraduit[9]=$month;
    $tableautraduit[10]=$day;
    $tableautraduit[11]=$hour;
    $tableautraduit[12]=$min;
    $tableautraduit[13]=$sec;

    return($tableautraduit);


}


$data=recuperation();
echo "<br>";
$data_tab = formetableau($data);
echo "<br>";
$trame = decodage($data_tab);
echo "<pre>";
print_r($trame);
echo "</pre>";

function getpiece($trame){
    $piece="";

    if($trame[4]==1){
        $piece="Chambre";
    }
    else if($trame[4]==2){
        $piece="Salon";
    }
    else if($trame[4]==3){
        $piece="Cuisine";
    }
    else if($trame[4]==4){
        $piece="WC";
    }
    else if($trame[4]==5){
        $piece="SdB";
    }
    echo $piece;
    return($piece);
}
function formerdate($trame){
    $date=$trame[8].".".$trame[9].".".$trame[10];
    echo $date;
    return $date;
}

$date=formerdate($trame);
$piece=getpiece($trame);
$value=$trame[5];
$object = new Bdd;
$requete = $object->connect()->prepare('INSERT INTO consommation_jour(piece_name,consommation_value,consommation_date) 
                                        VALUES (:piece_name,:consommation_value,:consommation_date);');
$requete->execute(array(
    "piece_name"=>$piece,
    "consommation_value"=>$value,
    "consommation_date"=>$date,
));
echo "<br>";
echo "<br>";
echo "<br>";
echo "Les données de la pièce ".$piece." ont bien été mises à jour.";
echo "<br>";
echo "La consommation de votre ".$piece." est de ".$value." le ".$date;

?>