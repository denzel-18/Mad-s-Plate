var ctx = document.getElementById('lineChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31'],
        datasets: [{
            label: '# of Feedbacks',
            data: [41, 12, 19, 31, 52, 22, 36, 18, 21, 33, 55, 82, 39, 22, 18, 36, 55, 42, 23, 44, 39, 43, 55, 29, 36, 72, 39, 63, 52, 32, 23],
            backgroundColor: [
                'rgba(85, 85, 85, 1)'

            ],
            borderColor: [
                'rgba(41, 155, 99)'

            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true
    }
});