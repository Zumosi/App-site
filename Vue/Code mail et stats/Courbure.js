new Chart(document.getElementById("Salon"), {
    type: 'line',
    data: {
        labels: date,
        datasets: [{
            data: consoSalon,
            label: "Consommation",
            borderColor: "#3e95cd",
            fill: false
        }, {
            data: puissanceSalon,
            label: "Puissance",
            borderColor: "#8e5ea2",
            fill: false
        }
]
    },
    options: {
        title: {
            display: true,
            text: 'Consomation de votre Salon'
        }
    }
});

new Chart(document.getElementById("Chambre"), {
    type: 'line',
    data: {
        labels: date,
        datasets: [{
            data: consoChambre,
            label: "Consommation",
            borderColor: "#3e95cd",
            fill: false
        }, {
            data: puissanceChambre,
            label: "Puissance",
            borderColor: "#8e5ea2",
            fill: false
        }
        ]
    },
    options: {
        title: {
            display: true,
            text: 'Consomation de votre Chambre'
        }
    }
});