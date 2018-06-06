<?php
$email=$_POST["email"];
echo $email;

echo "<br>";
echo $_POST["pass"];
echo "<br>";
echo $_POST["passv"];

if(($_POST["pass"])==($_POST["passv"]))
{
    header("Location: mdp_reset.php");
    $GLOBALS["email"]=$email;
    echo "Hello";
}
else{
    $_SESSION["message"]="Le code n'est pas bon";
}
?>
