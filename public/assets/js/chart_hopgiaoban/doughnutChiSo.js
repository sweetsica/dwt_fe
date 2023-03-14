const ctx = document.getElementById("doughnutChiSo");

new Chart(ctx, {
    type: "doughnut",
    data: {
        labels: ["Đã có hướng giải quyết", "Đã giải quyết", "Không thể giải quyết", "Không xác định được nguyên nhân"],
        datasets: [
            {
                label: "Chỉ số",
                data: [12, 19, 3, 5],
                borderWidth: 1,
            },
        ],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            y: [
                {
                    scaleLabel: {
                        display: true,
                        labelString: 'probability',
                    },
                    ticks: {
                        beginAtZero: true,
                    },
                },
            ],
        },
        plugins: {
            legend: {
                position: 'bottom',
                labels: {
                    usePointStyle: true,
                    pointStyle: 'rectRounded',
                    font: {
                        size: 10
                    }
                },
            },
            tooltip: { enabled: true },
        },
    },
});
