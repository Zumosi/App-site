
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>page 16</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <style>
        img {
            width: 10vw;
            height: auto;
        }
    </style>
    <style>
        caption
        {
            font-size: 5vw;
            text-align: center;
            caption-side: top;
        }
        td
        {
            border: none;
            text-align: center;
            background-color: transparent;
        }
        table
        {
            margin: 0 auto;
            margin-bottom: 3vw;
            border-spacing: 8vw 1vw;
            background-color: transparent;
        }

    </style>







</head>
<body>
<?php include ("header.php")
?>

<table>
    <caption> Les capteurs </caption>
    <tr>
        <td><p>Luminositée</td>
        <td><p>Humiditée</p></td>
        <td><p>Infra-rouge</p></td>
    </tr>
    <tr>
        <td><p><a href="pageluminosité.html" title="Luminositée"><img src="image/brightness.png"></a></p></td>
        <td><p><a href="pagehumidité.html" title="Humiditée"><img src="image/humidity.png"></a></p></td>
        <td><p><a href="pageinfrarouge.html" title="Infra-rouge"><img src="image/infrared.png"></a></p></td>
    </tr>
    <tr>
        <td><p>Micro</td>
        <td><p>Video-camera</p></td>
        <td><p>Temperature</p></td>
    </tr>
    <tr>
        <td><p><a href="pagemicro.html" title="Micro"><img src="image/micro.png"></a></p></td>
        <td><p><a href="pagevideocamera.html" title="Video-camera"><img src="image/video-camera.png"></a></p></td>
        <td><p><a href="pagetemperature.html" title="Temperature"><img src="image/temperature.png"></a></p></td>
    </tr>
</table>

<?php include ("footer.html");
?>

</body>
</html>
