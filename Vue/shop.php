<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Boutique</title>
    <link rel="stylesheet" href="shop.css"/>
</head>

<?php include ("../Modèle/requete.boutique.php") ?>


<body>
<?php $im = i() ?>

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

           <a href="capteur1.php?nc=1"> <h1><?php titreshop($im - 3) ?>  </h1></a>
            <?php textshop($im - 3) ?>
        </div>


        <div id="txt2">
            <a href="capteur2.php?nc=2"><h1><?php titreshop($im - 2) ?></h1></a>

            <?php textshop($im - 2) ?>
        </div>

        <div id="txt3">
            <h1><?php titreshop($im - 1) ?></h1>

            <?php textshop($im - 1) ?>
        </div>

        <div id="txt4">
            <h1><?php titreshop($im) ?></h1>

            <?php textshop($im) ?>
        </div>


    </article>


</section>


</body>
</html>
