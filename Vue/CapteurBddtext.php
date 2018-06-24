<?php
include("BDD.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/page18.css" />
    <script src="vue/JS/jquery-3.3.1.min.js"></script>
    <script>
      $(document).ready(function() {
            $("#button").click(function () {
                var etat = $('#etat').val();
                var varData = 'etat=' + etat;
                console.log(varData);

                $.ajax({
                    type:'POST',
                    url:'CapteurBddlistetext.php',
                    data:varData,
                    success:function(){
                    alert("tu peux aller dormir")
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
<input type="text" name="etat" id="etat"; />
  <div id="button" name="send" class="btn btn-block btn-primary">Clique ici</div>
<br>
<br>
<br>
<button id="button">
<div class="onoffswitch" >
    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" >
    <label class="onoffswitch-label" for="myonoffswitch">
        <span class="onoffswitch-inner"></span>
        <span class="onoffswitch-switch"></span>
    </label>
</div>
</button>
</body>
</html>

