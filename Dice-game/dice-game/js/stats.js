$(document).ready(function(){

        $.getJSON("game.php", function(result){
            aaa = result['result'];
            console.log(aaa);
        });
        
        
       
});

/*

var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [],
        datasets: [{
            label: 'Results',
            data: [],
            backgroundColor: [],
            borderColor: [],
            borderWidth: 1
        }],
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});

function addData() {

    var results = document.getElementById('vardas').value;

    
    console.log();

    myChart.data.datasets[0].data.push(results);
    myChart.update();
};


*/




