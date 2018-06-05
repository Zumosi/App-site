var myChart = document.getElementById("myChart").getContext('2d');
var CaptorChart = new Chart(myChart, {
    type: "line",//type du graphique il faut un de type line
    data: {
        labels: ["Salle à manger"],//titre
        datasets: [{
            label: "Consommation",
            data: capteur,
            backgroundColor: [//couleur camenbert
                "Red",
                "Green",
                "Blue"
            ]
        }]
    },
    options: {}
});