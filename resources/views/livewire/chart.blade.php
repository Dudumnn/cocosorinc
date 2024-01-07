<div>
    <canvas id="myChart"></canvas>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
  <script>
    const ctx = document.getElementById('myChart');
    const subscriptions=$wire.subscriptions;

    const label=$range->one;
    const values=;
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [$range->one, $range->two ],
        datasets: [{
          label: '# of Votes',
          data: [ $values[0], $values[1]],
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