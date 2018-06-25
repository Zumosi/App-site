// menu icon

$(document).ready(function() {
    $(".menu-icon").on("click", function() {
        $("nav ul").toggleClass("showing");
    });
});

// effet de scroll transparent/black

$(window).on("scroll", function() {
    if($(window).scrollTop()) {
        $('nav').addClass('black');
    }

    else {
        $('nav').removeClass('black');
    }
});