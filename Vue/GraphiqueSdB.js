
new Chart(document.getElementsByClassName("SdBg"), {
    type: 'line',
    data: {
        labels: dateSdB,
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
            text: 'Consomation et puissance généré par les capteurs de votre Salle de Bain'
        }
    }
});
