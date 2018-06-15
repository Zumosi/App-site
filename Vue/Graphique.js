new Chart(document.getElementsByClassName("Piece"), {
    type: 'line',
    data: {
        labels:date,
        datasets: [{
            data: conso,
            label: "Consommation",
            borderColor: "#3e95cd",
            fill: false
        }
        ]
    },
    options: {
        title: {
            display: true,
            text: 'Consomation et puissance généré par les capteurs de votre pièce'
        }
    }
});