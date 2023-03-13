Chart.register(ChartjsPluginStacked100.default);
new Chart(document.getElementById('stackedChart_chiPhi'), {
    type: 'bar',
    data: {
        labels: ['Chi Phí'],
        datasets: [
            {
                label: 'Tổng tháng',
                data: [15],
                backgroundColor: ['rgba(255, 26, 104, 0.2)'],
                borderColor: ['rgba(255, 26, 104, 1)'],
                borderWidth: 1,
            },
            {
                label: 'Tổng năm',
                data: [75],
                backgroundColor: ['rgba(54, 162, 235, 0.2)'],
                borderColor: ['rgba(54, 162, 235, 1)'],
                borderWidth: 1,
            },
        ],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,

        aspectRatio: 3,

        plugins: {
            stacked100: { enable: true, replaceTooltipLabel: false },
            legend: {
                display: false,
            },
            datalabels: {
                formatter: function (value) {
                    return Math.round(value) + '%';
                },
            },
            tooltip: {
                padding: 4,
                titleFont: {
                    size: 8,
                },
                bodyFont: {
                    size: 8,
                },
            },
        },
        scales: {
            x: {
                ticks: {
                    font: {
                        size: 10,
                        weight: '700',
                    },
                },
            },
            y: {
                beginAtZero: true,
                ticks: {
                    font: {
                        size: 8,
                        weight: '700',
                    },
                },
            },
        },
    },
});
