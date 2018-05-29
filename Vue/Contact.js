console.log("coucou");
$('#project1').onclick(
    function () {
        var src = $(this).data('onclick');
        $(this).attr('src', src);
        $('#question1').html("Numéro de téléphone : 06 666 666 666");
    },
    function () {
        var src = $(this).data('src');
        $(this).attr('src', src);
        $('#question1').html("Numéro de téléphone");
    });
$('#project2').onclick(
    function () {
        var src = $(this).data('onclick');
        $(this).attr('src', src);
        $('#question2').html("Adresse Email : 666 666@ 66666666.666");
    },
    function () {
        var src = $(this).data('src');
        $(this).attr('src', src);
        $('#question2').html("Adresse Email");
    }),
$('#project3').onclick(
    function () {
        var src = $(this).data('onclick');
        $(this).attr('src', src);
        $('#question3').html("Adresse Postale :  666 Rue de la 6666");
        },
    function () {
        var src = $(this).data('src');
        $(this).attr('src', src);
        $('#question3').html("Adresse Postale");
    }
);