    new Chart(document.getElementsByClassName("Chambreg"), {
        type: 'line',
        data: {
            labels: datechambre,
            datasets: [{
                data: consoChambre,
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
