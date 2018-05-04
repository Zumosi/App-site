
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>page 16</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="page%2016.css" />

</head>
<body>
<?php include ("header.php")
?>

<table>
    <caption> Les capteurs </caption>
    <tr>
        <td><p>Luminosité</td>
        <td><p>Humidité</p></td>
        <td><p>Infra-rouge</p></td>
    </tr>
    <tr>
        <td><p><a href="page17.php?capteur=lux" title="Luminosité"><img src="image/brightness.png"></a></p></td>
        <td><p><a href="page17.php?capteur=hum" title="Humidité"><img src="image/humidity.png"></a></p></td>
        <td><p><a href="page17.php?capteur=ir" title="Infra-rouge"><img src="image/infrared.png"></a></p></td>
    </tr>
    <tr>
        <td><p>Micro</td>
        <td><p>Video-camera</p></td>
        <td><p>Temperature</p></td>
    </tr>
    <tr>
        <td><p><a href="page17.php?capteur=mic" title="Micro"><img src="image/micro.png"></a></p></td>
        <td><p><a href="page17.php?capteur=vid" title="Video-camera"><img src="image/video-camera.png"></a></p></td>
        <td><p><a href="page17.php?capteur=temp" title="Temperature"><img src="image/temperature.png"></a></p></td>
    </tr>
</table>

<?php include ("footer.html");
?>

</body>
</html>
