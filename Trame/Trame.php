<?php
include("..\Controleur\BDD.php");
// RECUPERATION
$tableautraduit=array();
$object = new Bdd;
$object->connect();
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

function getpiece($id_capteur){
    $object = new Bdd;
    $object->connect();
    $requete = $object->connect()->prepare('SELECT nom FROM piece WHERE id_piece IN(SELECT id_place FROM capteur WHERE id_capteur=:id_capteur)');
    $requete->execute(array("id_capteur"=>$id_capteur));
    $piece = $requete->fetch();
    return $piece[0];



    /*if($trame[4]==1){
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
    return($piece);*/
}
function formerdate($trame){
    $date=$trame[8].".".$trame[9].".".$trame[10];
    echo $date;
    return $date;
}

$date=formerdate($trame);
$id_capteur=$trame[4];
$piece=getpiece($id_capteur);
$value=$trame[5];
$pseudo=$trame[1];
$requete = $object->connect()->prepare('SELECT id_utilisateur FROM trame WHERE pseudo=:pseudo');
$requete->execute(array(
    "pseudo"=>$pseudo
));
$id_utilisateur = $requete->fetch();
$id_utilisateur=$id_utilisateur[0];
$requete = $object->connect()->prepare('INSERT INTO consommation_jour(piece_name,consommation_value,consommation_date,id_capteur) 
                                        VALUES (:piece_name,:consommation_value,:consommation_date,:id_capteur);');
$requete->execute(array(
    "piece_name"=>$piece,
    "consommation_value"=>$value,
    "consommation_date"=>$date,
    "id_capteur"=>$id_capteur
));
$requete = $object->connect()->prepare('SELECT type FROM habitation WHERE id_user=:id_user');
$requete->execute(array(
    "id_user"=>$id_utilisateur,
));
$type_maison=$requete->fetch();
$type_maison=$type_maison[0];

$requete = $object->connect()->prepare('SELECT prenom FROM utilisateur WHERE id_utilisateur=:id_user');
$requete->execute(array(
    "id_user"=>$id_utilisateur,
));
$prenom=$requete->fetch();
$prenom=$prenom[0];

echo "<br>";
echo "Les informations concernant votre ".$type_maison." ont bien été mise à jour ".$prenom;
echo "<br>";
echo "<br>";
echo "Les données de la pièce ".$piece." ont bien été mises à jour.";
echo "<br>";
echo "La consommation de votre ".$piece." est de ".$value." le ".$date;

?>