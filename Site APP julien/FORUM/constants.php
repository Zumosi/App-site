<?php
/**
 * Created by IntelliJ IDEA.
 * User: Julien
 * Date: 23/04/2018
 * Time: 12:25
 */
define('VISITEUR',1);
define('INSCRIT',2);
define('MODO',3);
define('ADMIN',4);


define('ERR_IS_CO','Vous ne pouvez pas accéder à cette page si vous n\'êtes pas connecté');
?>

<?php

if (!isset($_POST['pseudo'])) //On est dans la page de formulaire

{

    echo '<form method="post" action="connexion.php">

    <fieldset>

    <legend>Connexion</legend>

    <p>

    <label for="pseudo">Pseudo :</label><input name="pseudo" type="text" id="pseudo" /><br />

    <label for="password">Mot de Passe :</label><input type="password" name="password" id="password" />

    </p>

    </fieldset>

    <p><input type="submit" value="Connexion" /></p></form>

    <a href="register.php">Pas encore inscrit ?</a>

     

    </div>

    </body>

    </html>';

}

?>
