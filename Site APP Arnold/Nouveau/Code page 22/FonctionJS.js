console.log("coucou");
$('#project1').hover(
    function () {
        var src = $(this).data('hover');
        $(this).attr('src', src);
        $('#question1').html("BBBB");
    },
    function () {
        var src = $(this).data('src');
        $(this).attr('src', src);
        $('#question1').html("CCCC");
    }
);