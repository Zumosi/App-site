function Isok(){
    if ((document.getElementById("pass").value) != (document.getElementById("passv").value) ) {
        alert("Mauvais mdp!");
        return false;
    }
    else return true;
}