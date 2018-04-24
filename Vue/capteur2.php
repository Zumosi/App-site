<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Capteur</title>
    <link rel="stylesheet" href="capteur1.css"/>
</head>

<?php include("../Modèle/requete.boutique.php") ?>


<body>
<?php $i= $_GET['nc']; ?>
<?php $q=q($i) ?>

<section>
    <aside>
        <div id="image2"><img src="image/im2.jpg"></div>
    </aside>

    <article>
        <h1><?php titreshop($i) ?>  </h1>

        <div id="txtim1">
            <?php textshop($i) ?>
        </div>

        <p id="prix"> Prix : <?php prix($i) ?> </p>
        <p id="quanti"> Quantité disponible : <?php quanti($i) ?> </p>

        <form method="post" action="liste.php">

            <select id="nombre" name="choix">
                <option value="choix1" selected="selected"> 1</option>
                <?php choix2($q) ?>
                <?php choix3($q) ?>


                <input id="bouton" type="submit" value="Ajouter au Panier">
            </select>
        </form>

    </article>
</section>

</body>