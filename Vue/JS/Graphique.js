new Chart(document.getElementsByClassName("Piece"), {
    type: 'line',
    data: {
        labels: date,
        datasets: [{
            data: conso,
            label: "Consommation",
            borderColor: "#3e95cd",
            fill: false
        }
        ]
    },
    options: {
        scales: {
            yAxes: [{
                scaleLabel: {
                    display: true,
                    labelString: 'Consommation en Watt'
                }
            }],
            xAxes: [{
                scaleLabel: {
                    display: true,
                    labelString: 'Date'
                }
            }]
        }
    }
});
