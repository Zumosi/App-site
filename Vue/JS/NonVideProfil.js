function NonVideProfil() {
    var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
    if ((!isNaN(document.getElementById("nom").value)) && ((document.getElementById("nom").value) != "")) {
        alert("Ceci n'est pas un nom !");
        return false;
    }
    else if ((!isNaN(document.getElementById("prenom").value)) && ((document.getElementById("prenom").value) != "")) {
        alert("Ceci n'est pas un prenom !");
        return false;
    }
    else if (isNaN(document.getElementById("numero").value)) {
        alert("Ceci n'est pas un numéro il contient des lettres");
        return false
    }
    else if ((document.getElementById("numero").value).length!=10&&(document.getElementById("numero").value).length!=0){
        alert("Ceci n'est pas un numéro il est trop long / court");
        return false
    }
    else if ((!regex.test((document.getElementById("mail").value))) && ((document.getElementById("mail").value) != "")) {
        alert("Ceci n'est pas un mail!");
        return false;
    }
    else if ((document.getElementById("mdp").value).length<=4&&((document.getElementById("mdp").value) != "")){
        alert("Ceci n'est pas un mot de passe valide !");
        return false;
    }
    else return true;
    }
