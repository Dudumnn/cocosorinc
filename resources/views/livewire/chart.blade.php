

<div class="max-w-sm w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
    <!-- Radial Chart -->
    <div class="py-6" id="radial-chart"></div>
</div>
  
  <script>
    // ApexCharts options and config
    window.addEventListener("load", function() {
      const getChartOptions = () => {
          return {
            series: {!! json_encode($chartVar) !!},
            colors: ["#020617", "#020617", "#020617", "#020617", "#020617", "#020617", "#020617", "#020617"],
            chart: {
              height: "380px",
              width: "100%",
              type: "radialBar",
              sparkline: {
                enabled: true,
              },
            },
            plotOptions: {
              radialBar: {
                track: {
                  background: '#E5E7EB',
                },
                dataLabels: {
                  show: false,
                },
                hollow: {
                  margin: 0,
                  size: "32%",
                }
              },
            },
            grid: {
              show: false,
              strokeDashArray: 4,
              padding: {
                left: 2,
                right: 2,
                top: -23,
                bottom: -20,
              },
            },
            labels: {!! json_encode($chart) !!},
            legend: {
              show: true,
              position: "bottom",
              fontFamily: "Inter, sans-serif",
            },
            tooltip: {
              enabled: true,
              x: {
                show: false,
              },
            },
            yaxis: {
              show: false,
              labels: {
                formatter: function (value) {
                  return value + 'employee/s';
                }
              }
            }
          }
        }
        
        if (document.getElementById("radial-chart") && typeof ApexCharts !== 'undefined') {
          var chart = new ApexCharts(document.querySelector("#radial-chart"), getChartOptions());
          chart.render();
        }
    });
  </script>
  