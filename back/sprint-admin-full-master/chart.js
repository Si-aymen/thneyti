const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Direst', 'Email', 'Ad Networks', 'Video Ads'],
        datasets: [{
            label: 'Source',
            data: [22, 12, 8, 6],
            backgroundColor: [
                'rgb(22, 132, 11)',
                'rgb(75, 0, 252)',
                'rgb(126, 0, 127)',
                'rgb(235, 11, 237)',

            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});