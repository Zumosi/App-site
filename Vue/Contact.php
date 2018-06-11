<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="css/Contact.css">
    <script src="Vue/jquery-3.3.1.min.js"></script>
    <script src="Vue/Contact.js"></script>
    <script>

        $(document).ready(function() {
            $('#formulairemail').hide();
            $("#project2").click(function () {
                var etatform = $('#etatform').val();
                if(document.getElementById('etatform').value=="on") {
                    etatform = "off";
                    document.getElementById('etatform').value = "off";
                    alert("étatform : off ");
                    $('#formulairemail').hide();
                }
                else if(document.getElementById('etatform').value=="off"){
                    etatform="on";
                    document.getElementById('etatform').value="on";
                    alert("état : on ");
                    $('#formulairemail').show();
                }
            });
        });
        </script>
</head>
<body>
<h1>Contact</h1>

<br><br><br>
<img id="project1" src="Vue/image/Minus.png" width="50" height="50"  onclick="changeImage1()" alt=""  />
<br>
<div id="question1">Numéro de téléphone</div>
<br><br><br>
<img id="project2" src="Vue/image/Minus.png" width="50" height="50"  onclick="changeImage2()" alt=""  />
<br>
<div id="question2">Adresse Email</p></div><br>
<form method='post' action='vue/ajoutmail.php' id='formulairemail'>
    <input type='hidden' name='etatform' id="etatform" value='off'/>
    <input type='submit' name='commentaire' value='Envoyer un mail'/>
</form>
<br><br><br>

<img id="project3" src="Vue/image/Minus.png" width="50" height="50"  onclick="changeImage3()" alt=""  />
<br>
<div id="question3">Adresse Postale</p></div>

</body>
</html>