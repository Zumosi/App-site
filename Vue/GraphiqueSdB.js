
new Chart(document.getElementById("SdB"), {
    type: 'line',
    data: {
        labels: date,
        datasets: [{
            data: consoSdB,
            label: "Consommation",
            borderColor: "#3e95cd",
            fill: false
        }, {
            data: puissanceSdB,
            label: "Puissance",
            borderColor: "#8e5ea2",
            fill: false
        }
        ]
    },
    options: {
        title: {
            display: true,
            text: 'Consomation de votre Salle de Bain'
        }
    }
});