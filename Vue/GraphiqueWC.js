
new Chart(document.getElementById("WC"), {
    type: 'line',
    data: {
        labels: date,
        datasets: [{
            data: consoWC,
            label: "Consommation",
            borderColor: "#3e95cd",
            fill: false
        }, {
            data: puissanceWC,
            label: "Puissance",
            borderColor: "#8e5ea2",
            fill: false
        }
        ]
    },
    options: {
        title: {
            display: true,
            text: 'Consomation de vos WC'
        }
    }
});