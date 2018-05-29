console.log("coucou");
$('#project1').onclick(
    function () {
        var src = $(this).data('hover');
        $(this).attr('src', src);
        $('#question1').html("Question dévelopée Article labellisé du jour\n" +
            "Lettres T et M de couleur noire.TrackMania (TM) est un jeu de course développé par Nadeo et édité par Focus Home Interactive en France le 21 novembre 2003 sur PC, au Royaume-Uni le 28 novembre 2003, puis en 2004 dans le reste du monde. Le jeu offre une approche atypique par rapport aux créations du même genre au moment de sa sortie, de par son gameplay simple orienté arcade, son éditeur de niveau et la facilité de partager les créations, et l'intérêt de son mode multijoueur.\n" +
            "TrackMania est assez moyennement accueilli par la presse spécialisée malgré de bonnes notes parfois, déconcertée par son gameplay simpliste axé arcade allant à contre-courant des productions du moment, lui reprochant l'absence de collisions avec les concurrents, le minimalisme de la simulation, la petitesse des pistes sur lesquelles un seul tour est possible. Nombreux sont les critiques qui relèvent un jeu d'entrée de gamme, cependant très addictif. À l'unanimité, ils trouvent le jeu « fun », mais ont du mal à voir le potentiel de cet hybride entre course très courte et jeu de construction de circuits, alors que quelques-uns d'entre-eux entrevoient la qualité du concept et un possible intérêt, notamment en multijoueur.\n" +
            "\n" +
            "Le jeu connait une extension appelée TrackMania: Power Up! qui sort en mai 2004, rajoutant en particulier un nouveau mode de jeu. Le jeu est également réédité sous la forme d'un remaster publié en octobre 2005 sous le titre TrackMania Original, utilisant le moteur graphique de la suite TrackMania Sunrise et les nouveautés de celle-ci. TrackMania donne naissance à une communauté de joueurs en ligne importante et une série très prolifique comptant de nombreuses suites.aaaa");
    },

    function () {
        var src = $(this).data('src');
        $(this).attr('src', src);
        $('#question1').html("Question 1");
    },
    function () {

    })
$('#project2').onclick(
    function () {
        var src = $(this).data('hover');
        $(this).attr('src', src);
        $('#question2').html("Question dévelopée");
    },

    function () {
        var src = $(this).data('src');
        $(this).attr('src', src);
        $('#question2').html("Question 2");
    }
);