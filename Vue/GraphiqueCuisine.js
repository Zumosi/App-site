
new Chart(document.getElementById("Cuisine"), {
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
            text: 'Consomation de votre Cuisine'
        }
    }
});