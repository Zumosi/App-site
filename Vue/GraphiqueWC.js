
new Chart(document.getElementsByClassName("WCg"), {
    type: 'line',
    data: {
        labels: dateWC,
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
            text: 'Consomation et puissance généré par les capteurs de vos WC'
        }
    }
});