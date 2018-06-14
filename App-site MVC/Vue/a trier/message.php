<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Forum</title>
    <link rel="stylesheet"/>
</head>

<?php include("Modèle/requete.topic.php"); ?>
<?php $ttopic = numtitretopic() ?>

<?php if ($_GET['nt'] == 'topic1') {
    $ttopic = 2;
} elseif ($_GET['nt'] == 'topic2') {
    $ttopic = 3;
} elseif ($_GET['nt'] == 'topic3') {
    $ttopic = 4;
}
?>

<body>
<?php blockmessage($ttopic) ?>


</body>