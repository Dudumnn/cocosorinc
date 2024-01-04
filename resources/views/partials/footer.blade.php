    <x-messages />
    <script>
        // ApexCharts options and config
        window.addEventListener("load", function() {
        let options = {
            chart: {
            height: "100%",
            maxWidth: "100%",
            type: "line",
            fontFamily: "Inter, sans-serif",
            dropShadow: {
                enabled: false,
            },
            toolbar: {
                show: false,
            },
            },
            tooltip: {
            enabled: true,
            x: {
                show: false,
            },
            },
            dataLabels: {
            enabled: false,
            },
            stroke: {
            width: 6,
            },
            grid: {
            show: true,
            strokeDashArray: 4,
            padding: {
                left: 2,
                right: 2,
                top: -26
            },
            },
            series: [
            {
                name: "Clicks",
                data: [6500, 6418, 6456, 6526, 6356, 6456],
                color: "#1A56DB",
            },
            {
                name: "CPC",
                data: [6456, 6356, 6526, 6332, 6418, 6500],
                color: "#7E3AF2",
            },
            ],
            legend: {
            show: false
            },
            stroke: {
            curve: 'smooth'
            },
            xaxis: {
            categories: ['01 Feb', '02 Feb', '03 Feb', '04 Feb', '05 Feb', '06 Feb', '07 Feb'],
            labels: {
                show: true,
                style: {
                fontFamily: "Inter, sans-serif",
                cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                }
            },
            axisBorder: {
                show: false,
            },
            axisTicks: {
                show: false,
            },
            },
            yaxis: {
            show: false,
            },
        }
    
        if (document.getElementById("line-chart") && typeof ApexCharts !== 'undefined') {
            const chart = new ApexCharts(document.getElementById("line-chart"), options);
            chart.render();
        }
        });
    </script>

    <script>
        // ApexCharts options and config
        window.addEventListener("load", function() {
        const getChartOptions = () => {
            return {
                series: [300, 250, 100],
                colors: ["#16BDCA", "#E74694", "#FDBA8C"],
                chart: {
                height: 320,
                width: "100%",
                type: "donut",
                },
                stroke: {
                colors: ["transparent"],
                lineCap: "",
                },
                plotOptions: {
                pie: {
                    donut: {
                    labels: {
                        show: true,
                        name: {
                        show: true,
                        fontFamily: "Inter, sans-serif",
                        offsetY: 20,
                        },
                        total: {
                        showAlways: true,
                        show: true,
                        label: "No. of Employees",
                        fontFamily: "Inter, sans-serif",
                        formatter: function (w) {
                            const sum = w.globals.seriesTotals.reduce((a, b) => {
                            return a + b
                            }, 0)
                            return `${sum}`
                        },
                        },
                        value: {
                        show: true,
                        fontFamily: "Inter, sans-serif",
                        offsetY: -20,
                        formatter: function (value) {
                            return value
                        },
                        },
                    },
                    size: "80%",
                    },
                },
                },
                grid: {
                padding: {
                    top: -2,
                },
                },
                labels: ["Green", "Red", "Yellow"],
                dataLabels: {
                enabled: false,
                },
                legend: {
                position: "bottom",
                fontFamily: "Inter, sans-serif",
                },
                yaxis: {
                labels: {
                    formatter: function (value) {
                    return value
                    },
                },
                },
                xaxis: {
                labels: {
                    formatter: function (value) {
                    return value
                    },
                },
                axisTicks: {
                    show: false,
                },
                axisBorder: {
                    show: false,
                },
                },
            }
            }
    
            if (document.getElementById("donut-chart") && typeof ApexCharts !== 'undefined') {
            const chart = new ApexCharts(document.getElementById("donut-chart"), getChartOptions());
            chart.render();
    
            // Get all the checkboxes by their class name
            const checkboxes = document.querySelectorAll('#devices input[type="checkbox"]');
    
            // Function to handle the checkbox change event
            function handleCheckboxChange(event, chart) {
                const checkbox = event.target;
                if (checkbox.checked) {
                    switch(checkbox.value) {
                        case 'green':
                        chart.updateSeries([15.1, 22.5, 4.4]);
                        break;
                        case 'red':
                        chart.updateSeries([25.1, 26.5, 1.4]);
                        break;
                        case 'yellow':
                        chart.updateSeries([45.1, 27.5, 8.4]);
                        break;
                        default:
                        chart.updateSeries([55.1, 28.5, 1.4]);
                    }
    
                } else {
                    chart.updateSeries([35.1, 23.5, 2.4]);
                }
            }
    
            // Attach the event listener to each checkbox
            checkboxes.forEach((checkbox) => {
                checkbox.addEventListener('change', (event) => handleCheckboxChange(event, chart));
            });
            }
        });
    </script>
    <!-- Your Livewire component view content -->
    <script>
        // JavaScript to toggle password visibility
        const passwordInput = document.getElementById('password');
        const passwordInput2 = document.getElementById('password_confirmation');
        const showPasswordCheckbox = document.getElementById('show-password');
    
        showPasswordCheckbox.addEventListener('change', () => {
            passwordInput.type = showPasswordCheckbox.checked ? 'text' : 'password';
            passwordInput2.type = showPasswordCheckbox.checked ? 'text' : 'password';
        });
    </script>
    <script>
        // Listen for the $refresh event and reload the page
        Livewire.on('$refresh', function () {
            location.reload();
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/datepicker.min.js"></script>

    <script>
        function disableButton() {
            // Toggle the 'pointer-events-none' class
            document.getElementById('myButton').classList.add('pointer-events-none');
        }
        function enableButton() {
            // Enable the button
            document.getElementById('myButton').classList.remove('pointer-events-none');
        }
    </script>
    <script>
        function updateClock() {
            const now = new Date();
            const hours = now.getHours().toString().padStart(2, '0');
            const minutes = now.getMinutes().toString().padStart(2, '0');
            const seconds = now.getSeconds().toString().padStart(2, '0');

            const formattedTime = `${hours}:${minutes}:${seconds}`;

            document.getElementById('clock').innerText = formattedTime;
        }

        function updateDate() {
            const now = new Date();
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            const formattedDate = now.toLocaleDateString('en-US', options);

            document.getElementById('date').innerText = formattedDate;
        }

        // Update the clock every second
        setInterval(updateClock, 1000);

        // Update the date every minute
        setInterval(updateDate, 60000);

        // Initial updates
        updateClock();
        updateDate();
    </script>
</body>
</html>