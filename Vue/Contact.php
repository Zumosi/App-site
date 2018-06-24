<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" type="text/css" href="css/Contact.css">
    <script src="Vue/JS/jquery-3.3.1.min.js"></script>
    <script src="Vue/JS/Contact.js"></script>
    <script>

        $(document).ready(function () {
            $('#formulairemail').hide();
            $("#project2").click(function () {
                var etatform = $('#etatform').val();
                if (document.getElementById('etatform').value == "on") {
                    etatform = "off";
                    document.getElementById('etatform').value = "off";

                    $('#formulairemail').hide();
                }
                else if (document.getElementById('etatform').value == "off") {
                    etatform = "on";
                    document.getElementById('etatform').value = "on";

                    $('#formulairemail').show();
                }
            });
        });
    </script>
</head>
<body>
<p class="titre">Contact</p>

<br><br><br>
<p class="coord">Nos coordonnées:</p>
<br><br><br>
<img id="project1" src="Vue/image/Minus.png" width="50" height="50" onclick="changeImage1()" alt=""/>
<br>
<div id="question1">Numéro de téléphone</div>
<br><br><br>
<img id="project2" src="Vue/image/Minus.png" width="50" height="50" onclick="changeImage2()" alt=""/>
<br>
<div id="question2">Adresse Email</p></div>
<br>
<form method='post' action='index.php?cible=ajoutmail' id='formulairemail'>
    <input type='hidden' name='etatform' id="etatform" value='off'/>
    <input type='submit' name='commentaire' value='Envoyer un mail'/>
</form>
<br><br><br>

<img id="project3" src="Vue/image/Minus.png" width="50" height="50" onclick="changeImage3()" alt=""/>
<br>
<div id="question3">Adresse Postale</p></div>

</body>
</html>