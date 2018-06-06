<?php
$email=$_POST["email"];
if(($_POST["pass"])==($_POST["passv"]))
{
    ?>
   <form method='POST' action='mdp_reset.php' id="formemail">
    <input type='hidden' name='email' value=<?php echo htmlspecialchars($email); ?>>
    </form>
    <script type="text/javascript">
        document.getElementById('formemail').submit(); // SUBMIT FORM
    </script>
<?php
    //header("Location: mdp_reset.php");
}
else{
    $_SESSION["message"]="Le code n'est pas bon";
}
?>
