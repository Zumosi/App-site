<?php
require ("./Controleur/verify_admin.php");
if(verify_admin($_SESSION['email'])==true){
?>
<html>
<body>

<ul>
    <li><a href="index.php?cible=shop_admin">shop</a></li>
    <li><a href="index.php?cible=users_admin">utilisateur</a></li>
    <li><a href="index.php?cible=habitation_admin">habitation</a></li>
    <li><a href="index.php?cible=topic_admin">topic</a></li>
    <li><a href="index.php?cible=message_admin">messages</a></li>
</ul>

</body>
<?php
}
else{
    echo "vous n'avez pas accés à cette page désolé";
}
?>
</html>