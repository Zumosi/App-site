<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--  <link rel="stylesheet" type="text/css"  href="" />
      <script type="text/javascript" src=""></script> -->
    <title>Choix Pièce </title>
</head>
<body>

<h1>Sur quelle pièce souhaitez vous agir (choisissez une pièce): </h1>

<form method="post" action = "ajoutcapteursecondaireliste.php" onsubmit="">
    <select name="piece">
        <option value="">Aucune</option><br>
        <option value="Cuisine">Cuisine</option><br>
        <option value="Chambre">Chambre</option><br>
        <option value="SdB">SdB</option><br>
        <option value="Salon">Salon</option><br>
        <option value="WC">WC</option><br>



    </select>
    <input type="submit" value="Envoyer" />

</form>

</body>
</html>


