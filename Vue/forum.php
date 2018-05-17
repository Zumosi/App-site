<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Forum</title>
    <link rel="stylesheet" href="Vue/forum.css"/>
</head>

<?php include("Modèle/requete.topic.php"); ?>
<?php $ttopic = numtitretopic() ?>
<?php $nomuti1 = nomuti($ttopic) ?>
<?php $uti2 = nomuti($ttopic - 1) ?>
<?php $uti3 = nomuti($ttopic - 2) ?>
<body>

<h1> Forum</h1>

<a id="newmess" href="index.php?cible=newmess"> Nouveau Sujet</a>

<form id="rechercher" action="liste.php" method="post">
    <input type="text" name="titre" placeholder="rechercher dans le forum">
</form>


<div id="jactuel">
    <div id="jact"><?php recupjour(1) ?> </div>
    <div id="mact"><?php recupmois(1) ?> </div>
    <div id="aact"><?php recupan(1) ?> </div>
</div>

<div id="titretoptic">
    <a href="index.php?nt=topic1&cible=message"> <?php titretopic($ttopic - 2) ?></a>
</div>

<div id="text">
    <?php textmess($ttopic - 2,$uti3) ?>
</div>

<p id="poster"> Poster par :</p>
<div id="nom"><?php afficheuti($uti3) ?> </div>
<p id="le">le </p>
<div id="jtopic"><?php recupjour($ttopic - 2) ?> </div>
<div id="mtopic"><?php recupmois($ttopic - 2) ?></div>
<div id="atopic"><?php recupan($ttopic - 2) ?></div>





<div id="titretoptic">
    <a href="index.php?nt=topic2&cible=message"><?php titretopic($ttopic - 1) ?> </a>
</div>

<div id="text">
    <?php textmess($ttopic - 1,$uti2) ?>
</div>

<p id="poster"> Poster par :</p>
<div id="nom"><?php afficheuti($uti2) ?> </div>
<p id="le">le </p>
<div id="jtopic"><?php recupjour($ttopic - 1) ?> </div>
<div id="mtopic"><?php recupmois($ttopic - 1) ?></div>
<div id="atopic"><?php recupan($ttopic - 1) ?></div>



<div id="titretoptic">
    <a href="index.php?nt=topic3&cible=message"><?php titretopic($ttopic) ?></a>
</div>

<div id="text">
    <?php textmess($ttopic,$nomuti1) ?>
</div>

<p id="poster"> Poster par :</p>
<div id="nom"><?php afficheuti($nomuti1) ?> </div>
<p id="le">le </p>
<div id="jtopic"><?php recupjour($ttopic) ?> </div>
<div id="mtopic"><?php recupmois($ttopic) ?></div>
<div id="atopic"><?php recupan($ttopic) ?></div>






</body>