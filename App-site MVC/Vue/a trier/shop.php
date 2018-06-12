<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Boutique</title>
    <link rel="stylesheet" href="css/shop.css"/>
</head>


<body>
<?php $im = i() ?>

<section>
    <div class="aside">
        <div class="box1">
            <div id="im1"><img src="Vue/image/inf.jpg" alt="Capteur infrarouge"></div>
            <div id="txt1">

                <a href="index.php?nc=1&cible=capteur1"><h1><?php titreshop($im - 3) ?>  </h1></a>
                <p><?php textshop($im - 3) ?></p>
            </div>

        </div>
        <br>
        <div class="box2">
            <div id="im4"><img src="Vue/image/im2.jpg"></div>
            <div id="txt2">

                <a href="index.php?nc=2&cible=capteur1"><h1><?php titreshop($im - 2) ?></h1></a>

                <p><?php textshop($im - 2) ?></p>
            </div>
        </div>
        <br>
        <div class="box3">
            <div id="im2"><img src="Vue/image/im3.jpg"></div>
            <div id="txt3">

                <a href="index.php?nc=3&cible=capteur1"><h1><?php titreshop($im - 1) ?></h1></a>

                <p><?php textshop($im - 1) ?></p>
            </div>
        </div>
        <br>
        <div class="box4">
            <div id="im3"><img src="Vue/image/im4.jpg"></div>
            <div id="txt4">

                <a href="index.php?nc=4&cible=capteur1"><h1><?php titreshop($im) ?></h1></a>

                <p><?php textshop($im) ?></p>
            </div>
        </div>
        <br>
    </div>


</section>


</body>
</html>
