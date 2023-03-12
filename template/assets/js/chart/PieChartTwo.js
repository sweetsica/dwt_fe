const pieChartTwo = document.getElementById('pieChartTwo');
new Chart(pieChartTwo, {
    type: 'pie',
    data: {
        labels: ['Nhân sự', 'Marketing', 'Tuyển Dụng', 'Kiếm Soát'],
        datasets: [
            {
                label: '# of Votes',
                data: [10, 5, 30, 55],
                borderWidth: 1,
            },
        ],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            y: {
                scaleLabel: {
                    display: true,
                    labelString: 'probability',
                },
                ticks: {
                    beginAtZero: true,
                },
            },
        },
        plugins: {
            legend: {
                position: 'top',
                labels: {
                    usePointStyle: true,
                    pointStyle: 'rectRounded',
                },
            },
            tooltip: { enabled: false },
        },
    },
});
