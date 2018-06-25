
    new Chart(document.getElementsByClassName("Salong"), {
        type: 'line',
        data: {
            labels: datesalon,
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
                text: 'Consomation et puissance généré par les capteurs de votre Salon'
            }
        }
    });