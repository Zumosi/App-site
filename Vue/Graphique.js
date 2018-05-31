var myChart = document.getElementById("myChart").getContext('2d');
var CaptorChart = new Chart(myChart, {
    type: "pie",
    data: {
        labels: ["Salle à manger", "Salon", "SdB"],
        datasets: [{
            label: "Consommation",
            data: capteur,
            backgroundColor: [
                "Red",
                "Green",
                "Blue"
            ]
        }]
    },
    options: {}
});