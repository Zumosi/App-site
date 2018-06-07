<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Forum</title>
    <link rel="stylesheet" href="Vue/forum.css"/>

</head>

<?php include("Modèle/requete.topic.php"); ?>
<?php $ttopic = numtitretopic() ?>
<?php $nomuti1 = nomuti($ttopic-0) ?>
<?php $uti2 = nomuti($ttopic - 1) ?>
<?php $uti3 = nomuti($ttopic - 2) ?>
<body>

<p class="titre"> Forum</p>

<a class="newmess" href="index.php?cible=newmess"> Nouveau Sujet</a>

<form class="rechercher" action="liste.php" method="post">
    <input type="text" name="titre" placeholder="rechercher dans le forum">
</form>


<div class="jactuel">
    <div class="jact"><?php recupjour(1) ?> </div>
    <div class="mact"><?php recupmois(1) ?> </div>
    <div class="aact"><?php recupan(1) ?> </div>
</div>
<div class="sujet">
<div class="titretoptic">
    <a href="index.php?nt=topic1&cible=message"> <?php titretopic($ttopic - 2) ?></a>
</div>

<div class="text">
    <?php textmess($ttopic - 2,$uti3) ?>
</div>

<p class="poster"> Poster par :</p>
<div class="nom"><?php afficheuti($uti3) ?> </div>
<p class="le">le </p>
<div class="jtopic"><?php recupjour($ttopic - 2) ?> </div>
<div class="mtopic"><?php recupmois($ttopic - 2) ?></div>
<div class="atopic"><?php recupan($ttopic - 2) ?></div>
</div>

<div class="sujet">
    <div class="titretoptic">
        <a href="index.php?nt=topic3&cible=message"><?php titretopic($ttopic-1) ?></a>
    </div>

    <div class="text">
        <?php textmess($ttopic-1,$uti2) ?>
    </div>

    <p class="poster"> Poster par :</p>
    <div class="nom"><?php afficheuti($uti2) ?> </div>
    <p class="le">le </p>
    <div class="jtopic"><?php recupjour($ttopic-1) ?> </div>
    <div class="mtopic"><?php recupmois($ttopic-1) ?></div>
    <div class="atopic"><?php recupan($ttopic-1) ?></div>

</div>



<div class="sujet">
<div class="titretoptic">
    <a href="index.php?nt=topic3&cible=message"><?php titretopic($ttopic) ?></a>
</div>

<div class="text">
    <?php textmess($ttopic,$nomuti1) ?>
</div>

<p class="poster"> Poster par :</p>
<div class="nom"><?php afficheuti($nomuti1) ?> </div>
<p class="le">le </p>
<div class="jtopic"><?php recupjour($ttopic) ?> </div>
<div class="mtopic"><?php recupmois($ttopic) ?></div>
<div class="atopic"><?php recupan($ttopic) ?></div>

</div>




</body>