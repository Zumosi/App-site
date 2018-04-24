<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Boutique</title>
    <link rel="stylesheet" href="shop.css"/>
</head>

<?php
function textshop($im)
{
    $bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
    $reponse = $bdd->prepare('SELECT * FROM boutique WHERE id_boutique = ?');
    $reponse->execute(array($im));
    while ($donnees = $reponse->fetch()) {
        echo $donnees['description'];
    }
    $reponse->closeCursor();
}

?>
<?php
function titreshop($im)
{
    $bdd = new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
    $reponse = $bdd->prepare('SELECT * FROM boutique WHERE id_boutique = ?');
    $reponse->execute(array($im));
    while ($donnees = $reponse->fetch()) {
        echo $donnees['nom'];
    }
    $reponse->closeCursor();
}

?>



<?php function i(){
    $bdd=new PDO('mysql:host=localhost;dbname=athome;charset=utf8', 'root', '');
    $reponse = $bdd->query('SELECT MAX(id_boutique) AS maxprix FROM boutique');
    while ($donnees = $reponse->fetch()) {
        $i=$donnees['maxprix'];
    }
    $reponse->closeCursor();
    return $i;
}
?>


<body>
<?php $im=i() ?>

<?php include("header.php"); ?>
<section>
    <aside>
        <div id="imboutique">
            <div id="im1"><img src="image/inf1.png" alt="Capteur infrarouge"></div>

            <div id="im4"><img src="image/im2.jpg"></div>

            <div id="im2"><img src="image/im3.jpg"></div>

            <div id="im3"><img src="image/im4.jpg"></div>
        </div>
    </aside>

    <article>

        <div id="txt1">

            <h1><?php titreshop($im-1) ?>  </h1>
            <?php textshop($im-3) ?>
        </div>


        <div id="txt2">
            <h1><?php titreshop($im-2) ?></h1>

            <?php textshop($im-2) ?>
        </div>

        <div id="txt3">
        <h1><?php titreshop($im-1) ?></h1>

        <?php textshop($im-1) ?>
        </div>

        <div id="txt4">
        <h1><?php titreshop($im) ?></h1>

        <?php textshop($im) ?>
        </div>


    </article>


</section>


</body>
</html>
