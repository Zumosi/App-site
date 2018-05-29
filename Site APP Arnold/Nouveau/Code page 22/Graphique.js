function Courbe() {
    var numberJS = '<?php echo $numberPHP; ?>';
    alert(numberJS);
    console.log(numberJS, "Hello, world!");
    var myChart = document.getElementById("myChart").getContext("2d");
    var CaptorChart = new Chart(myChart, {
        type: "line",
        data: {
            labels: ["Capteur"],
            datasets: [{
                label: "Consommation",
                data: [
                    1,
                    $numberJS,
                    3,
                    4,
                    5,
                    6,
                ],
                backgroundColor: "Red"
            }]
        },
        options: {}
    });
}
Courbe();
;
