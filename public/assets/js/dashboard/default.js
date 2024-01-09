(function () {

    var growthoptions = {
        series: [{
            name: 'Growth',
            data: [22, 14, 23, 8, 14, 12, 2, 14, 18, 35, 18, 8, 24]
        }],
        chart: {
            height: 150,
            type: 'line',
            stacked: true,
            toolbar: {
                show: false
            },
            dropShadow: {
                enabled: true,
                enabledOnSeries: undefined,
                top: 5,
                left: 0,
                blur: 4,
                color: '#7A70BA',
                opacity: 0.22
            },
        },
        grid: {
            show: true,
            borderColor: '#000000',
            strokeDashArray: 0,
            position: 'back',
            xaxis: {
                lines: {
                    show: true,
                },
            },
            yaxis: {
                lines: {
                    show: false,
                },
            },
        },

        colors: ["#5527FF"],
        stroke: {
            width: 3,
            curve: 'smooth'
        },
        xaxis: {
            lines: {
                show: true
            },
            type: 'category',
            categories: ['0', '', '10k', '', '20k', '', '30k', '', '40k', '', '50k', '', '60k', ''],
            tickAmount: 10,
            labels: {
                style: {
                    fontFamily: 'Outfit, sans-serif',
                    fontWeight: 500,
                    colors: '#8D8D8D',
                },
            },
            axisTicks: {
                show: false
            },
            axisBorder: {
                show: false
            },
            tooltip: {
                enabled: false,
            },
        },
        fill: {
            type: 'gradient',
            gradient: {
                shade: 'dark',
                gradientToColors: ['#5527FF'],
                shadeIntensity: 1,
                type: 'horizontal',
                opacityFrom: 1,
                opacityTo: 1,
                colorStops: [
                    {
                        offset: 0,
                        color: "#7A70BA",
                        opacity: 1
                    },
                    {
                        offset: 100,
                        color: "#48A3D7",
                        opacity: 1
                    },
                ]
            },
        },
        yaxis: {
            min: -10,
            max: 40,
            labels: {
                show: false
            }
        }
    };

    var growthchart = new ApexCharts(document.querySelector("#growthchart"), growthoptions);
    growthchart.render();

    // ----------Shifts Overview-----//
    var option = {
        labels: ["Shoes", "Grocery", "other", "other"],
        series: [30, 25, 35, 55],
        chart: {
            type: "donut",
            height: 200,
        },
        dataLabels: {
            enabled: false,
        },
        legend: {
            show: false,
        },
        stroke: {
            width: 6,
        },
        plotOptions: {
            pie: {
                expandOnClick: false,
                donut: {
                    size: "83%",
                    labels: {
                        show: true,
                        name: {
                            offsetY: 4,
                        },
                        total: {
                            show: true,
                            fontSize: "20px",
                            fontFamily: "Outfit', sans-serif",
                            fontWeight: 600,
                            label: "$ 34,098",
                            formatter: () => "Total Overviewt",
                        },
                    },
                },
            },
        },
        states: {
            normal: {
                filter: {
                    type: "none",
                },
            },
            hover: {
                filter: {
                    type: "none",
                },
            },
            active: {
                allowMultipleDataPointsSelection: false,
                filter: {
                    type: "none",
                },
            },
        },
        colors: ["#48A3D7", "#D77748", "#C95E9E", "#7A70BA"],
    };

    var chart = new ApexCharts(
        document.querySelector("#shifts-overview"),
        option
    );
    chart.render();
    var options = {
        series: [{
            type: 'bar',
            data: [350, 180, 240, 470, 200, 570, 300, 200]
        }, {
            type: 'bar',
            data: [500, 390, 280, 140, 290, 190, 390, 90]
        },
        {
            type: 'line',
            data: [350, 180, 240, 470, 200, 570, 300, 200]
        }],
        chart: {
            height: 350,
            toolbar: {
                show: false
            },
        },
        markers: {
            size: 6,
            strokeColor: "#ffffff",
            strokeWidth: 3,
            offsetX: -3,
            strokeOpacity: 1,
            fillOpacity: 1,
            hover: {
                size: 6
            }
        },
        hover: {
            size: 5,
            sizeOffset: 0,
        },
        plotOptions: {
            bar: {
                vertical: true,
                columnWidth: '60%',
                borderRadius: 6,
                dataLabels: {
                    position: 'top',
                },
            }
        },
        grid: {
            show: true,
            strokeDashArray: 5,
            position: 'back',
            xaxis: {
                lines: {
                    show: false
                }
            },
        },
        legend: {
            show: false,
        },
        dataLabels: {
            enabled: false,
            offsetX: -6,
            style: {
                fontSize: '14px',
                fontWeight: 600,
                colors: ['#fff']
            }
        },
        stroke: {
            show: true,
            width: [4, 4, 3],
            colors: ['#ffffff', '#ffffff', MofiAdminConfig.primary]
        },
        colors: [MofiAdminConfig.primary, MofiAdminConfig.secondary],
        tooltip: {
            shared: true,
            intersect: false
        },
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July', 'Aug'],
            axisBorder: {
                show: false
            },
            labels: {
                style: {
                    fontFamily: 'Outfit, sans-serif',
                    fontWeight: 500,
                    colors: '#8D8D8D',
                },
            },
        },
        yaxis: {
            labels: {
                style: {
                    fontFamily: 'Outfit, sans-serif',
                    fontWeight: 500,
                    colors: '#3D434A',
                },
            },
        },
        responsive: [
            {
                breakpoint: 1400,
                options: {
                    series: [{
                        type: 'bar',
                        data: [350, 180, 240, 470, 200]
                    }, {
                        type: 'bar',
                        data: [500, 390, 280, 140, 290]
                    },
                    {
                        type: 'line',
                        data: [350, 180, 240, 470, 200]
                    }],
                }
            },
            {
                breakpoint: 1200,
                options: {
                    series: [{
                        type: 'bar',
                        data: [350, 180, 240, 470, 200, 570, 300, 200]
                    }, {
                        type: 'bar',
                        data: [500, 390, 280, 140, 290, 190, 390, 90]
                    },
                    {
                        type: 'line',
                        data: [350, 180, 240, 470, 200, 570, 300, 200]
                    }],
                }
            },
            {
                breakpoint: 550,
                options: {
                    series: [{
                        type: 'bar',
                        data: [350, 180, 240, 470]
                    }, {
                        type: 'bar',
                        data: [500, 390, 280, 140]
                    },
                    {
                        type: 'line',
                        data: [350, 180, 240, 470]
                    }],
                }
            },
        ]
    };

    var chart = new ApexCharts(document.querySelector("#customer-transaction"), options);
    chart.render();

    var options = {
        series: [{
            name: 'TEAM A',
            type: 'area',
            data: [20, 50, 60, 180, 90, 340, 120, 250, 190, 100, 180, 380, 190, 220, 100, 90, 140, 70, 130, 90, 100, 50, 00]
        }, {
            name: 'TEAM B',
            type: 'line',
            data: [20, 70, 30, 100, 120, 220, 250, 100, 200, 300, 330, 270, 300, 200, 180, 220, 130, 300, 220, 180, 40, 70, 00]
        }],
        chart: {
            height: 270,
            type: 'line',
            toolbar: {
                show: false,
            },
            dropShadow: {
                enabled: true,
                top: 4,
                left: 1,
                blur: 8,
                color: [MofiAdminConfig.primary, '#8D8D8D'],
                opacity: 0.6
            },

        },
        stroke: {
            curve: 'smooth',
            width: [3, 3],
            dashArray: [0, 4]

        },
        grid: {
            show: true,
            borderColor: 'rgba(106, 113, 133, 0.30)',
            strokeDashArray: 3,
        },
        fill: {
            type: 'solid',
            opacity: [0, 1],
        },

        labels: ['Jan', '', 'Feb', '', 'Mar', '', 'Apr', '', 'May', '', 'Jun', '', 'Jul', '', 'Aug', '', 'Sep', '', 'Oct', '', 'Nov', '', 'Dec'],
        markers: {
            size: [3, 0],
            colors: ['#3D434A'],
            strokeWidth: [0, 0],
        },
        responsive: [
            {
                breakpoint: 991,
                options: {
                    chart: {
                        height: 300
                    }
                }
            },
            {
                breakpoint: 1500,
                options: {
                    chart: {
                        height: 325
                    }
                }
            }
        ],
        tooltip: {
            shared: true,
            intersect: false,
            y: {
                formatter: function (y) {
                    if (typeof y !== "undefined") {
                        return y.toFixed(0) + " points";
                    }
                    return y;
                }
            }
        },
        annotations: {
            xaxis: [{
                x: 550,
                strokeDashArray: 5,
                borderWidth: 3,
                borderColor: '#7a70ba69',
            },
            ],
            points: [{
                x: 550,
                y: 330,
                marker: {
                    size: 8,
                    fillColor: MofiAdminConfig.primary,
                    strokeColor: "#ffffff",
                    strokeWidth: 4,
                    radius: 5,
                },
                label: {
                    borderWidth: 1,
                    offsetY: 0,
                    text: '32.10k',
                    style: {
                        fontSize: '14px',
                        fontWeight: '600',
                        fontFamily: 'Outfit, sans-serif',
                    }
                }
            }],
        },
        legend: {
            show: false,
        },
        colors: [MofiAdminConfig.primary, '#8D8D8D'],
        xaxis: {
            labels: {
                style: {
                    fontFamily: 'Outfit, sans-serif',
                    fontWeight: 500,
                    colors: '#8D8D8D',
                },
            },
            axisBorder: {
                show: false
            },
        },
        yaxis: {
            labels: {
                formatter: function (value) {
                    return value + "k";
                },
                style: {
                    fontFamily: 'Outfit, sans-serif',
                    fontWeight: 500,
                    colors: '#3D434A',
                },
            },
        },
        responsive: [
            {
                breakpoint: 576,
                options: {
                    series: [{
                        name: 'TEAM A',
                        type: 'area',
                        data: [00, 50, 60, 180, 90, 340, 120, 250, 190, 100, 180, 380, 190, 220, 100, 90, 140]
                    }, {
                        name: 'TEAM B',
                        type: 'line',
                        data: [00, 70, 30, 100, 120, 220, 250, 100, 200, 300, 330, 270, 300, 200, 180, 220, 130]
                    }],
                }
            },
        ]
    };
    var chart = new ApexCharts(document.querySelector("#chart-dash-2-line"), options);
    chart.render();

})();

