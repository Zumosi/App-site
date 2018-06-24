new Chart(document.getElementsByClassName("line-chart"), {
    type: 'line',
    data: {
        labels: ["Janvier","Février","Mars"],
        datasets: [{
            data: capteur,
            label: "Consommation",
            borderColor: "#3e95cd",
            fill: false
        }, {
            data: puissance,
            label: "Puissance",
            borderColor: "#8e5ea2",
            fill: false
        }
        ]
    },
    options: {
        title: {
            display: true,
            text: 'Consomation et puissance généré par les capteurs'
        }
    }
});