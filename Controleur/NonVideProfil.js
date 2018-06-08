function NonVideProfil() {
    if (isNan(document.getElementById("nom").value)&&(document.getElementById("mail").value)!="") {
        console.log("Ceci n'est pas un nom !");
        return false;
    }
    else if (isNan(document.getElementById("prenom").value)&&(document.getElementById("mail").value)!=""){
        alert("Ceci n'est pas un prenom !");
        return false;
    }
    else if ((!isNaN(document.getElementById("numero").value))&&(document.getElementById("numero").length !=10)) {
        alert("Ceci n'est pas un numéro !");
        return false;
    }
    else if (isNaN(document.getElementById("mail").value)&&(document.getElementById("mail").value)!=""){
        alert("Ceci n'est pas un mail !");
        return false;
    }
    else if (document.getElementById("mdp").length <= 4 ){
        alert("Ceci n'est pas un mot de passe valide !");
        return false;
    }
    else return true;
}

