<div class="relative flex flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
  <div class="pt-6 px-2 pb-0">
    <div id="line-chart"></div>
  </div>
</div>
 
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
  const chartConfig1 = {
    series: [
      {
        name: "Sales",
        data: {!! json_encode($chartVar) !!},
      },
    ],
    chart: {
      type: "line",
      height: 240,
      toolbar: {
        show: false,
      },
    },
    title: {
      show: "",
    },
    dataLabels: {
      enabled: false,
    },
    colors: ["#020617"],
    stroke: {
      lineCap: "round",
      curve: "smooth",
    },
    markers: {
      size: 0,
    },
    xaxis: {
      axisTicks: {
        show: false,
      },
      axisBorder: {
        show: false,
      },
      labels: {
        style: {
          colors: "#616161",
          fontSize: "12px",
          fontFamily: "inherit",
          fontWeight: 400,
        },
      },
      categories: {!! json_encode($chart) !!},
    },
    yaxis: {
      labels: {
        style: {
          colors: "#616161",
          fontSize: "12px",
          fontFamily: "inherit",
          fontWeight: 400,
        },
      },
    },
    grid: {
      show: true,
      borderColor: "#dddddd",
      strokeDashArray: 5,
      xaxis: {
        lines: {
          show: true,
        },
      },
      padding: {
        top: 5,
        right: 20,
      },
    },
    fill: {
      opacity: 0.8,
    },
    tooltip: {
      theme: "dark",
    },
  };
  
  const chart = new ApexCharts(document.querySelector("#chart"), chartConfig1);
  
  chart.render();
</script>