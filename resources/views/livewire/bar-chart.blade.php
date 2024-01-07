<div class="relative w-full flex flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
    
    <div class="w-full pt-6 px-2 pb-0">
        <div id="bar-chart" class="w-full"></div>
    </div>
</div>
   
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
@php
    $barr = [];
@endphp
@foreach ($bar as $item)
    @php
        $barr[] = $item;
    @endphp
@endforeach
<script>
    const chartConfig = {
    series: [
        {
        name: "No. of Employee/s",
        data: {!! json_encode($barVar) !!},
        },
    ],
    chart: {
        type: "bar",
        height: 300,
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
    plotOptions: {
        bar: {
        columnWidth: "40%",
        borderRadius: 2,
        },
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
        categories: {!! json_encode($barr) !!},
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

    const chart = new ApexCharts(document.querySelector("#bar-chart"), chartConfig);

    chart.render();
</script>