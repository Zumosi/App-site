<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Capteur</title>
    <link rel="stylesheet" href="Vue/capteur1.css"/>
</head>


<body>

<?php if ($_GET['nc'] == 1) {
    $i = (i() - 3);
} elseif ($_GET['nc'] == 2) {
    $i = (i() - 2);
} elseif ($_GET['nc'] == 3) {
    $i = (i() - 1);
} elseif ($_GET['nc'] == 4) {
    $i = (i());
}
?>


<?php $q = q($i) ?>


<section>
    <aside>
        <?php if ($_GET['nc'] == 1) {
            echo '<div id="image"><img src="Vue/image/inf.jpg"></div>';
        } elseif ($_GET['nc'] == 2) {
            echo '<div id="image2"><img src="Vue/image/im2.jpg"></div>';
        } elseif ($_GET['nc'] == 3) {
            echo '<div id="image3"><img src="Vue/image/im3.jpg"></div>';
        } elseif ($_GET['nc'] == 4) {
            echo '<div id="image4"><img src="Vue/image/im4.jpg"></div>';
        }
        ?>
    </aside>

    <article>
        <h1><?php titreshop($i) ?> </h1>

        <div id="txtim1">
            <?php textshop($i) ?>
        </div>

        <p id="prix"> Prix : <?php prix($i) ?> </p>
        <p id="quanti"> Quantité disponible : <?php quanti($i) ?> </p>

        <form method="post" action="vue/liste.php">


            <input id="quant" type="number" name="quantitée" min="0" max="<?php quanti($i) ?>"/>
            <input id="bouton" type="submit" name="addpanier" value="Ajouter au Panier">

        </form>

    </article>
</section>

</body>