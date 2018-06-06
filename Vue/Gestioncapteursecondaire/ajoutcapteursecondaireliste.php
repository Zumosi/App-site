<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--  <link rel="stylesheet" type="text/css"  href="" />
      <script type="text/javascript" src=""></script> -->
    <title>Choix Pièce </title>
</head>
<body>

<h1>Quel capteur souhaitez vous ajouter à l'utilisateur secondaire : </h1>

<form method="post" action = "ajoutcapteursecondaireliste2.php" onsubmit="">
        <input type="checkbox" name="Camera" value="Camera" id="Camera" /><label for="Camera"> Camera </label><br>
        <input type="checkbox" name="Temperature" value="Temperature" id="Temperature" /> <label for="Temperature">Temperature</label> <br>
        <input type="checkbox" name="Humidite" value="Humidite" id="Humidite" /><label for="Humidite"> Humidite</label> <br>
        <input type="checkbox" name="Infrarouge" value="Infrarouge" id="Infrarouge" /><label for="Infrarouge"> Infrarouge </label><br>
        <input type="checkbox" name="Luminosite" value="Luminosite" id="Luminosite" /> <label for="Luminosite">Luminosite</label> <br>
        <input type="checkbox" name="Micro" value="Micro" id="Micro" /> <label for="Micro">Micro</label> <br>
        <br><br>
    <input type="submit" value="Envoyer" />

</form>

</body>
</html>