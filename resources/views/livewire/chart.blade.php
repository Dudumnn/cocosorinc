<div>
    <canvas id="myChart"></canvas>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
  <script>
    const ctx = document.getElementById('myChart');
    const subscriptions=$wire.subscriptions;

    const label=subscriptions.map(item=>item.range);
    const values=subscriptions.map(item=>item.Value);
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: label,
        datasets: [{
          label: '# of Votes',
          data: values,
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
  </script>