
new Chart(document.getElementsByClassName("Cuisineg"), {
    type: 'line',
    data: {
        labels: date,
        datasets: [{
            data: consoCuisine,
            label: "Consommation",
            borderColor: "#3e95cd",
            fill: false
        }, {
            data: puissanceCuisine,
            label: "Puissance",
            borderColor: "#8e5ea2",
            fill: false
        }
        ]
    },
    options: {
        title: {
            display: true,
            text: 'Consomation et puissance généré par les capteurs de votre Cuisine'
        }
    }
});