(function () {

    var options = {
        series: [{
            name: 'PRODUCT A',
            data: [20, 36, 24, 10, 22, 43, 55, 41, 67, 22, 43]
        }, {
            name: 'PRODUCT B',
            data: [35, 20, 38, 38, 13, 27, 23, 20, 8, 13, 27]
        }, {
            name: 'PRODUCT C',
            data: [14, 16, 42, 46, 21, 14, 17, 15, 15, 21, 14]
        },],
        chart: {
            type: 'bar',
            height: 220,
            stacked: true,
            toolbar: {
                show: false
            },
            zoom: {
                enabled: false
            }
        },
        responsive: [{
            breakpoint: 1501,
            options: {
                chart: {
                    height: 270,
                }

            }
        }],
        colors: [MofiAdminConfig.primary, MofiAdminConfig.secondary, '#D77748'],
        plotOptions: {
            bar: {
                horizontal: false,
                borderRadius: 2,
                columnWidth: '35%',
                dataLabels: {
                    total: {
                        show: false,
                    }
                }
            },
        },
        xaxis: {
            categories: ['01/01/2011 GMT', '01/02/2011 GMT', '01/03/2011 GMT', '01/04/2011 GMT',
                '01/05/2011 GMT', '01/06/2011 GMT'
            ],
            labels: {
                show: false,
            },
            axisBorder: {
                show: false
            },
            axisTicks: {
                show: false
            },
        },
        legend: {
            show: false,
        },
        dataLabels: {
            enabled: false,
        },
        fill: {
            opacity: 1
        }
    };

    var chart = new ApexCharts(document.querySelector("#total-project"), options);
    chart.render();

    // =========
    // overview chart
    var optionsoverview = {
        series: [
            {
                name: "Earning",
                type: "area",
                data: [43, 43, 48, 43, 57, 50, 34, 52, 40, 40, 40, 46, 52, 40, 40, 30, 42, 37, 42, 38, 38, 38],
            },
        ],
        chart: {
            height: 350,
            type: "line",
            stacked: false,
            toolbar: {
                show: false,
            },
            dropShadow: {
                enabled: true,
                top: 2,
                left: 0,
                blur: 4,
                color: "#000",
                opacity: 0.08,
            },
        },
        stroke: {
            width: [4, 2, 2],
            curve: "straight",
        },
        grid: {
            show: true,
            borderColor: "var(--chart-border)",
            strokeDashArray: 6,
        },
        plotOptions: {
            bar: {
                columnWidth: "50%",
            },
        },
        colors: ["#7A70BA", "#54BA4A", "#FF3364"],
        fill: {
            type: "gradient",
            gradient: {
                shade: "light",
                type: "vertical",
                opacityFrom: 0.4,
                opacityTo: 0,
                stops: [0, 100],
            },
        },
        annotations: {
            xaxis: [{
                x: 312,
                strokeDashArray: 5,
                borderWidth: 3,
                borderColor: MofiAdminConfig.primary,
            },
            ],
            points: [{
                x: 312,
                y: 52,
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
                    text: '43.10k',
                    style: {
                        fontSize: '14px',
                        fontWeight: '600',
                        fontFamily: 'Outfit, sans-serif',
                    }
                }
            }],
        },
        labels: [
            "Jan",
            "",
            "Feb",
            "",
            "Feb",
            "",
            "Apr",
            "",
            "Mar",
            "",
            "Jun",
            "",
            "Apr",
            "",
            "Aug",
            "Sep",
            "May",
            "Nov",
            "Aug",
            "Sep",
            "Jun",
            "Nov",
        ],
        xaxis: {
            type: "category",
            tickAmount: 4,
            tickPlacement: "between",
            tooltip: {
                enabled: false,
            },
            axisBorder: {
                color: "var(--chart-border)",
            },
            axisTicks: {
                show: false,
            },
            labels: {
                style: {
                    fontFamily: 'Outfit, sans-serif',
                    fontWeight: 500,
                    colors: '#8D8D8D',
                },
            },
        },
        legend: {
            show: false,
        },
        yaxis: {
            min: 0,
            tickAmount: 6,
            tickPlacement: "between",
            labels: {
                style: {
                    fontFamily: 'Outfit, sans-serif',
                    fontWeight: 500,
                    colors: '#3D434A',
                },
            },
        },
        tooltip: {
            shared: false,
            intersect: false,
        },
        responsive: [
            {
                breakpoint: 1200,
                options: {
                    chart: {
                        height: 250,
                    },
                },
            },
        ],
    };

    var chartoverview = new ApexCharts(
        document.querySelector("#orderoverview"),
        optionsoverview
    );
    chartoverview.render();
    // bar overview chart
    // bar overview chart
    var optionsorder = {
        series: [
            {
                name: "Revenue",
                data: [
                    30, 40, 18, 25, 18, 10, 20, 35, 22, 40, 30, 38, 20, 35, 11, 28, 40,
                    11, 28, 40, 11, 28, 40, 11, 28, 40, 11, , 28, 40, 11, 28, 40, 11,
                ],
            },
        ],
        chart: {
            type: "bar",
            height: 180,
            toolbar: {
                show: false,
            },
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: "70%",
            },
        },
        colors: ["#48A3D7"],
        grid: {
            show: false,
        },
        dataLabels: {
            enabled: false,
        },
        stroke: {
            show: true,
            width: 1,
            colors: ["transparent"],
        },
        xaxis: {
            categories: [
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
            ],
            labels: {
                show: false,
            },
            axisBorder: {
                show: false,
            },
            axisTicks: {
                show: false,
            },
        },
        yaxis: {
            labels: {
                show: false,
            },
            axisBorder: {
                show: false,
            },
            axisTicks: {
                show: false,
            },
        },
        fill: {
            opacity: 0.3,
        },
        tooltip: {
            enabled: false,
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
        responsive: [
            {
                breakpoint: 405,
                options: {
                    chart: {
                        height: 150,
                    },
                },
            },
        ],
    };

    var chartorder = new ApexCharts(
        document.querySelector("#order-bar"),
        optionsorder
    );
    chartorder.render();



    //  ======== table chart
    // radial chart js
    function radialCommonOption(data) {
        return {
            series: data.radialYseries,
            chart: {
                height: 90,
                type: 'radialBar',
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        size: '35%',
                    },
                    track: {
                        background: 'var(--theme-deafult)',
                        opacity: 0.2,
                    },
                    dataLabels: {
                        value: {
                            color: "var(--tag-text-color--edit)",
                            fontSize: "10px",
                            show: true,
                            offsetY: -12,
                        }
                    }
                },
            },
            colors: [data.color],

            stroke: {
                lineCap: "round",
            },
        }
    }

    const radial1 = {
        radialYseries: [75],
        color: MofiAdminConfig.primary,
    };

    const radialchart1 = document.querySelector('#widgetsChart1');
    if (radialchart1) {
        var radialprogessChart1 = new ApexCharts(radialchart1, radialCommonOption(radial1));
        radialprogessChart1.render();
    }
    // radial 2
    const radial2 = {
        radialYseries: [50],
        color: MofiAdminConfig.secondary,
    };
    const radialchart2 = document.querySelector('#widgetsChart2');
    if (radialchart2) {
        var radialprogessChart2 = new ApexCharts(radialchart2, radialCommonOption(radial2));
        radialprogessChart2.render();
    }
    // radial 3
    const radial3 = {
        radialYseries: [25],
        color: "#D77748",
    };
    const radialchart3 = document.querySelector('#widgetsChart3');
    if (radialchart3) {
        var radialprogessChart3 = new ApexCharts(radialchart3, radialCommonOption(radial3));
        radialprogessChart3.render();
    }
    // radial 4
    const radial4 = {

        radialYseries: [86],
        color: "#C95E9E",
    };
    const radialchart4 = document.querySelector('#widgetsChart4');
    if (radialchart4) {
        var radialprogessChart4 = new ApexCharts(radialchart4, radialCommonOption(radial4));
        radialprogessChart4.render();
    }
})();
