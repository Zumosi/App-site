
<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="css/ajoutmail.css">
</head>
<body>
<h1 id="send2">Envoie de mail</h1>
<h2 id="content">Ecrivez le contenu de votre mail</h2>

<form method='post' action='ajoutmailliste.php' id='formulairemail' onsubmit="<script>alert('votre mail a bien été envoyé')</script>">
    <input type='text' name='objetmail' id="objmail" placeholder="Objet Mail"/><br>
    <textarea type='text' name='msgmail' id="msgmail" placeholder="Contenu du Mail"></textarea><br>
    <input type='submit' id="send" name='commentaire' value='Envoyer un mail'/>
</form>


</body>
</html>
