function loadSprint(sprintId) {
    fetch(`/vegekul-reporter/sprint/${sprintId}`)
        .then(res => res.json())
        .then(data => {
            const ctx = document.getElementById('statusChart').getContext('2d');
            new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: Object.keys(data.statusSummary),
                    datasets: [{
                        label: 'Status breakdown',
                        data: Object.values(data.statusSummary),
                        backgroundColor: ['#36a2eb', '#ffcd56', '#ff6384'],
                    }]
                }
            });
        });
}
