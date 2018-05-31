console.log("coucou");

function changeImage1() {

    if (document.getElementById("project1").src.indexOf("Vue/image/Minus.png") != -1)
    {
        document.getElementById('project1').src = "Vue/image/Plus.jpg";
        $('#question1').html("Numéro de téléphone : 07 82 66 80 53");
    }
    else
    {
        document.getElementById("project1").src = "Vue/image/Minus.png";
        $('#question1').html("Numéro de téléphone");
    }
}

function changeImage2() {

    if (document.getElementById("project2").src.indexOf("Vue/image/Minus.png") != -1)
    {
        document.getElementById('project2').src = "Vue/image/Plus.jpg";
        $('#question2').html("Adresse Email : Athome@gmail.com");
    }
    else
    {
        document.getElementById("project2").src = "Vue/image/Minus.png";
        $('#question2').html("Adresse Email");
    }
}

function changeImage3() {

    if (document.getElementById("project3").src.indexOf("Vue/image/Minus.png") != -1)
    {
        document.getElementById('project3').src = "Vue/image/Plus.jpg";
        $('#question3').html("Adresse Postale :  666 Rue de la 6666");
    }

    else
    {
        document.getElementById("project3").src = "Vue/image/Minus.png";
        $('#question3').html("Adresse Postale");
    }
}



