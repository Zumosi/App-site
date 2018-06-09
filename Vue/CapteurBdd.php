<?php
session_start();
include("../Controleur/BDD.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/page18.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
      $(document).ready(function() {
            $("#button").click(function () {
                var etat = $('#etat').val();
                if(document.getElementById('etat').value=="on"){
                    etat="off";
                    document.getElementById('etat').value="off";
                    alert("état : on ");
                }
                else if(document.getElementById('etat').value=="off"){
                    etat="on";
                    document.getElementById('etat').value="on";
                    alert("état : off ");
                }
                var varData = 'etat=' + etat;
                console.log(varData);

                $.ajax({
                    type:'POST',
                    url:'CapteurBddliste.php',
                    data:varData,
                    success:function(){
                    alert("L'état du capteur a été modifié")
                }


            })
            });
      });
    </script>
    <title>Capteur</title>
</head>
<body>


  <?php
  /*
   $etat="off";
   echo 'var etat = ' .json_encode($etat) . ';';
   $id=1;
   ?>

   <?php
   $object = new Bdd;
   $requete='UPDATE capteur SET etat=:newetat WHERE id_capteur=:ID';
  /* if ("button is pressed"){
       $requete = $object->connect()->prepare('UPDATE capteur SET etat=:etat WHERE id_capteur=:ID');
       $requete->execute(array("newetat"=>$etat,
           "ID"=>$id));
       echo "Le capteur avec l'id " .$id. " a maintenant l'état : " . $newetat;
   }*/
?>
<input type="hidden" name="etat" id="etat" value="on" />
<br>
<br>
<br>
  <div id="button"
<button id="button">
<div class="onoffswitch" >
    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" >
    <label class="onoffswitch-label" for="myonoffswitch">
        <span class="onoffswitch-inner"></span>
        <span class="onoffswitch-switch"></span>
    </label>
</div>
    </div>
</button>
</body>
</html>

